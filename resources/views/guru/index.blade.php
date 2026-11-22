@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Guru 👨‍🏫</h2>
    <a href="{{ url('guru/create') }}" class="btn btn-primary">+ Tambah Guru</a>
</div>
<div class="card p-3">
    <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>NIP</th><th>Nama Guru</th><th>Mapel</th><th>No HP</th></tr></thead>
        <tbody>
            @foreach($gurus as $g)
            <tr><td>{{ $g->nip }}</td><td>{{ $g->nama }}</td><td>{{ $g->mapel }}</td><td>{{ $g->no_hp }}</td></tr>
            @endforeach
        </tbody>
    </table>
    <p>Total: {{ count($gurus) }} Guru </p>
</div>
<a href="{{ url('dashboard') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection