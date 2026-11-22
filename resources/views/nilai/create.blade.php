@extends('layouts.app')
@section('content')
<h2>Tambah Nilai 📊</h2>
<div class="card p-3">
    <form action="{{ url('nilai') }}" method="POST">
        @csrf
        <div class="mb-3"><label>Nama Siswa</label><input type="text" name="nama_siswa" class="form-control" placeholder="Ketik nama siswa" required></div>
        <div class="mb-3"><label>Mapel</label><input type="text" name="mapel" class="form-control" required></div>
        <div class="mb-3"><label>Nilai</label><input type="number" name="nilai" class="form-control" required></div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection