@extends('layouts.app')
@section('content')
<h2>Tambah Siswa 📚</h2>
<div class="card p-3">
    <form action="{{ url('siswa') }}" method="POST">
        @csrf
        <div class="mb-3"><label>NIS</label><input type="text" name="nis" class="form-control"></div>
        <div class="mb-3"><label>Nama Siswa</label><input type="text" name="nama" class="form-control"></div>
        <div class="mb-3"><label>Kelas</label><input type="text" name="kelas" class="form-control"></div>
        <div class="mb-3"><label>Jurusan</label><input type="text" name="jurusan" class="form-control"></div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('siswa') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection