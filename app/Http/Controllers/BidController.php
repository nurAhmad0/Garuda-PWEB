<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBidRequest;
use App\Models\Bid;
use App\Models\Project;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BidController extends Controller
{
    public function store(StoreBidRequest $request, string $id): RedirectResponse
    {
        $project = Project::find((int) $id);
        if ($project === null) {
            return redirect()->route('home')
                ->with('flash', ['Proyek tidak ditemukan.', 'err']);
        }
        $back = redirect()->route('projects.show', $project->id);
        if (! $project->isOpen()) {
            return $back->with('flash', ['Lelang sudah ditutup; penawaran tidak dapat diajukan.', 'err']);
        }
        $data = $request->validated();
        try {
            Bid::create([
                'project_id'   => $project->id,
                'developer_id' => $request->user()->id,
                'harga'        => (int) $data['harga'],
                'durasi'       => (int) $data['durasi'],
                'proposal'     => trim($data['proposal']),
            ]);
        } catch (QueryException $e) {
            if ((int) ($e->errorInfo[1] ?? 0) === 1062) {
                return $back->with('flash', ['Anda sudah mengajukan penawaran pada proyek ini.', 'err']);
            }
            throw $e;
        }
        return $back->with('flash', ['Penawaran berhasil dikirim.', 'ok']);
    }
    public function pick(Request $request, string $id): RedirectResponse
    {
        $bidId   = $this->positiveInt($request->input('bid_id'));
        $clientId = $request->user()->id;
        $err = DB::transaction(function () use ($id, $bidId, $clientId): string {
            $project = Project::where('id', (int) $id)
                ->where('client_id', $clientId)
                ->lockForUpdate()
                ->first();
            if ($project === null) {
                return 'Proyek tidak ditemukan atau bukan milik Anda.';
            }
            if ($project->status !== 'terbuka') {
                return 'Pemenang sudah dipilih atau lelang sudah ditutup.';
            }
            $bid = Bid::where('id', $bidId)
                ->where('project_id', $project->id)
                ->first();
            if ($bid === null) {
                return 'Penawaran tidak valid untuk proyek ini.';
            }
            $bid->is_winner = true;
            $bid->save();
            $project->status = 'ditutup';
            $project->save();
            return '';
        });
        $back = redirect()->route('projects.show', (int) $id);
        return $err === ''
            ? $back->with('flash', ['Pemenang berhasil dipilih.', 'ok'])
            : $back->with('flash', [$err, 'err']);
    }
    private function positiveInt(mixed $value): int
    {
        return (is_string($value) && preg_match('/\A[0-9]{1,12}\z/', $value))
            ? (int) $value
            : 0;
    }
}


