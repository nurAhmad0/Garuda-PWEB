<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(Request $request): View
    {
        $s = $request->query('q', '');
        $s = is_string($s) ? mb_substr(trim($s), 0, 100) : '';

        $projects = Project::query()
            ->with('client')
            ->withCount('bids')
            ->search($s)
            ->orderByDesc('id')
            ->get();

        return view('projects.index', compact('projects', 's'));
    }
    public function show(string $id, Request $request): View
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);

        $project = ($id !== false && $id > 0)
            ? Project::with('client')->find($id)
            : null;

        if ($project === null) {
            abort(404, 'Proyek tidak ditemukan.');
        }
        $bids = $project->bids()
            ->with('developer')
            ->orderByDesc('is_winner')
            ->orderBy('harga')
            ->orderBy('id')
            ->get();

        $user  = $request->user();
        $owner = $user !== null
            && $user->role === 'klien'
            && (int) $user->id === (int) $project->client_id;
        $open  = $project->isOpen();

        return view('projects.show', compact('project', 'bids', 'user', 'owner', 'open'));
    }
    public function create(): View
    {
        return view('projects.create');
    }
    public function store(StoreProjectRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Project::create([
            'client_id'    => $request->user()->id,
            'judul'        => $data['judul'],
            'deskripsi'    => $data['deskripsi'],
            'kategori'     => $data['kategori'],
            'budget_min'   => (int) $data['budget_min'],
            'budget_max'   => (int) $data['budget_max'],
            'batas_lelang' => $data['batas_lelang'],
        ]);
        return redirect()->route('dashboard')
            ->with('flash', ['Proyek berhasil dipasang.', 'ok']);
    }
}
