@extends('layouts.app')
@section('content')
<h2>Tambah Guru 👨‍🏫</h2>
<div class="card p-3">
    <form action="{{ url('guru') }}" method="POST">
        @csrf
        <div class="mb-3"><label>NIP</label><input type="text" name="nip" class="form-control"></div>
        <div class="mb-3"><label>Nama Guru</label><input type="text" name="nama" class="form-control"></div>
        <div class="mb-3"><label>Mata Pelajaran</label><input type="text" name="mapel" class="form-control"></div>
        <div class="mb-3"><label>No HP</label><input type="text" name="no_hp" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('guru') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection