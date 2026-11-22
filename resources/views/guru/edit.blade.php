@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h2>Edit Guru</h2>
    <form action="{{ route('guru.update', $guru->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3"><label>Nama</label><input type="text" name="nama" value="{{ $guru->nama }}" class="form-control"></div>
        <div class="mb-3"><label>NIP</label><input type="text" name="nip" value="{{ $guru->nip }}" class="form-control"></div>
        <div class="mb-3"><label>Mapel</label><input type="text" name="mapel" value="{{ $guru->mapel }}" class="form-control"></div>
        <div class="mb-3"><label>Alamat</label><textarea name="alamat" class="form-control">{{ $guru->alamat }}</textarea></div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection