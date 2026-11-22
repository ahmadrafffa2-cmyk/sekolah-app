@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <a href="/dashboard" class="btn btn-secondary mb-3">← Kembali Ke Dashboard</a>
  <h2>📰 Berita Sekolah</h2>

  <div class="card mt-3" style="border-radius:16px;">
    <div class="card-body">
      <h5>1. Upacara Senin Berjalan Lancar</h5>
      <small class="text-muted">Senin 17 November 2026</small><hr>
      <h5>2. Lomba Kebersihan Kelas</h5>
      <small class="text-muted">Jumat ini bersihkan halaman sekolah.</small><hr>
      <h5>3. Kelas 5 Juara Futsal</h5>
      <small class="text-muted">Tim futsal kita juara 1.</small><hr>
      <h5>4. Ujian Semester Ganjil</h5>
      <small class="text-muted">Ujian dimulai 15 Desember 2026.</small>
    </div>
  </div>
</div>
@endsection