<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $users = User::orderBy('id')->get(['id', 'nama', 'email', 'role']);
        $projects = Project::with('client:id,nama')
            ->orderByDesc('id')
            ->get(['id', 'client_id', 'judul', 'status']);
        return view('admin.index', compact('users', 'projects'));
    }
    public function updateRole(Request $request, string $id): RedirectResponse
    {
        $uid  = (int) $id;
        $role = $request->input('role');
        $role = is_string($role) ? $role : '';
        if ($uid <= 0) {
            return $this->respond('User tidak valid.', '');
        }
        if ($uid === (int) $request->user()->id) {
            return $this->respond('Anda tidak dapat mengubah peran akun sendiri.', '');
        }
        if (! in_array($role, User::ROLES, true)) {
            return $this->respond('Peran tidak valid.', '');
        }
        $target = User::find($uid);
        if ($target === null) {
            return $this->respond('User tidak ditemukan.', '');
        }
        $target->role = $role;
        $target->save();
        return $this->respond('', 'Peran user diubah.');
    }
    public function destroyUser(Request $request, string $id): RedirectResponse
    {
        $uid = (int) $id;
        if ($uid <= 0) {
            return $this->respond('User tidak valid.', '');
        }
        if ($uid === (int) $request->user()->id) {
            return $this->respond('Anda tidak dapat menghapus akun sendiri.', '');
        }
        $deleted = User::whereKey($uid)->delete();
        return $deleted > 0
            ? $this->respond('', 'User dihapus.')
            : $this->respond('User tidak ditemukan.', '');
    }

    public function destroyProject(string $id): RedirectResponse
    {
        $pid = (int) $id;
        if ($pid <= 0) {
            return $this->respond('Proyek tidak valid.', '');
        }
        $deleted = Project::whereKey($pid)->delete();

        return $deleted > 0
            ? $this->respond('', 'Proyek dihapus.')
            : $this->respond('Proyek tidak ditemukan.', '');
    }
    private function respond(string $err, string $ok): RedirectResponse
    {
        return redirect()->route('admin')
            ->with('flash', $err === '' ? [$ok, 'ok'] : [$err, 'err']);
    }
}
