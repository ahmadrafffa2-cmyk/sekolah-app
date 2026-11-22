@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Siswa 🎓</h2>
    <a href="{{ url('siswa/create') }}" class="btn btn-primary">+ Tambah Siswa</a>
</div>
<div class="card p-3">
    <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>NIS</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Aksi</th></tr></thead>
        <tbody>
            @foreach($siswas as $s)
            <tr>
                <td>{{ $s->nis }}</td><td>{{ $s->nama }}</td><td>{{ $s->kelas }}</td><td>{{ $s->jurusan }}</td>
                <td>
                    <form action="{{ url('siswa/'.$s->id) }}" method="POST" onsubmit="return confirm('Yakin hapus {{ $s->nama }}?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Total: {{ count($siswas) }} Siswa </p>
</div>
<a href="{{ url('dashboard') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection