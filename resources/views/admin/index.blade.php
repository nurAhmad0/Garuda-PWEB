@extends('layouts.app')
@section('title', 'Admin')
@section('content')
<div class="card"><h1>Admin</h1></div>
<div class="card"><h2>Kelola User</h2><table>
<tr><th>ID</th><th>Nama</th><th>Email</th><th>Peran</th><th>Aksi</th></tr>
@foreach ($users as $r)
<tr><td>{{ $r->id }}</td><td>{{ $r->nama }}</td><td>{{ $r->email }}</td><td>{{ $r->role }}</td><td>
@if ($r->id === auth()->id())
<span class="muted">(akun Anda)</span>
@else
<form class="inline" method="post" action="{{ route('admin.users.role', $r->id) }}">@csrf @method('PATCH')<select name="role">
@foreach (\App\Models\User::ROLES as $ro)
<option value="{{ $ro }}" @selected($ro === $r->role)>{{ $ro }}</option>
@endforeach
</select> <button class="sm" type="submit">Ubah</button></form>
<form class="inline" method="post" action="{{ route('admin.users.destroy', $r->id) }}" onsubmit="return confirm('Hapus user beserta proyek dan penawarannya?')">@csrf @method('DELETE')
<button class="sm sec" type="submit">Hapus</button></form>
@endif
</td></tr>
@endforeach
</table></div>
<div class="card"><h2>Kelola Proyek</h2><table>
<tr><th>ID</th><th>Judul</th><th>Klien</th><th>Status</th><th>Aksi</th></tr>
@foreach ($projects as $p)
<tr><td>{{ $p->id }}</td><td><a href="{{ route('projects.show', $p->id) }}">{{ $p->judul }}</a></td><td>{{ $p->client->nama }}</td><td>@include('partials.status-badge', ['status' => $p->status])</td><td>
<form class="inline" method="post" action="{{ route('admin.projects.destroy', $p->id) }}" onsubmit="return confirm('Hapus proyek beserta penawarannya?')">@csrf @method('DELETE')
<button class="sm sec" type="submit">Hapus</button></form></td></tr>
@endforeach
</table></div>
@endsection
