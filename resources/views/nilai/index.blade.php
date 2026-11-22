@extends('layouts.app')
@section('content')
<h2>Data Nilai 📊</h2>
<a href="{{ url('nilai/create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>
<table class="table table-bordered">
<tr><th>Nama Siswa</th><th>Mata Pelajaran</th><th>Nilai</th><th>Aksi</th></tr>
@foreach($nilais as $n)
<tr>
    <td>{{ $n->siswa->nama ?? '-' }}</td>
    <td>{{ $n->mapel }}</td>
    <td>{{ $n->nilai }}</td>
    <td><form action="{{ url('nilai/'.$n->id) }}" method="POST">@csrf @method('DELETE')<button class="btn btn-danger btn-sm">Hapus</button></form></td>
</tr>
@endforeach
</table>
<p>Total: {{ count($nilais) }} Nilai</p>
<a href="{{ url('/dashboard') }}" class="btn btn-secondary">Kembali</a>
@endsection