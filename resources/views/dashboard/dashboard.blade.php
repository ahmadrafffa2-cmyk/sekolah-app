@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <h2>Dashboard Sekolah</h2>
  <p class="text-muted">Selamat datang di halaman utama</p>

  <div class="row mt-4">
    <!-- DATA SISWA -->
    <div class="col-md-4 mb-3">
      <div class="card h-100" style="background:#3B82F6; color:white; border:none; border-radius:16px;">
        <div class="card-body">
          <h5>Data Siswa</h5>
          <h3>150 Siswa</h3>
       <a href="{{ url('/siswa') }}" class="btn btn-light w-100 mt-3">Lihat Siswa</a>
        </div>
      </div>
    </div>

    <!-- DATA GURU -->
    <div class="col-md-4 mb-3">
      <div class="card h-100" style="background:#0F766E; color:white; border:none; border-radius:16px;">
        <div class="card-body">
          <h5>Data Guru</h5>
          <h3>20 Guru</h3>
          <a href="{{ url('/guru') }}" class="btn btn-light w-100 mt-3">Lihat Guru</a>
        </div>
      </div>
    </div>

    <!-- DATA NILAI -->
    <div class="col-md-4 mb-3">
      <div class="card h-100" style="background:#F59E0B; border:none; border-radius:16px;">
        <div class="card-body">
          <h5>Data Nilai</h5>
          <h3>320 Nilai</h3>
          <a href="{{ url('/nilai') }}" class="btn btn-dark w-100 mt-3" ...>Lihat Nilai</a>
        </div>
      </div>
    </div>

    <!-- ULANG TAHUN -->
    <div class="col-md-4 mb-3">
      <div class="card h-100" style="background:#C084FC; border:none; border-radius:16px;">
        <div class="card-body">
          <h5>🎂 Ulang Tahun</h5>
          <h3>1 Siswa</h3>
          <a href="{{ url('/ulang-tahun') }}" class="btn btn-light w-100 mt-3">Lihat Ulang Tahun</a>
        </div>
      </div>
    </div>

    <!-- JAM SEKOLAH -->
    <div class="col-md-4 mb-3">
      <div class="card h-100" style="background:#A5F3FC; border:none; border-radius:16px;">
        <div class="card-body">
          <h5>🕐 Jam Sekolah</h5>
          <h3>4 Jadwal</h3>
         <a href="{{ url('/jam-sekolah') }}" class="btn btn-light w-100 mt-3">Lihat Jam Sekolah</a>
        </div>
      </div>
    </div>

    <!-- BERITA SEKOLAH -->
    <div class="col-md-4 mb-3">
      <div class="card h-100" style="background:#FED7AA; border:none; border-radius:16px;">
        <div class="card-body">
          <h5>📰 Berita Sekolah</h5>
          <h3>10 Berita</h3>
   <a href="{{ url('/berita-sekolah') }}" class="btn btn-light w-100 mt-3">Lihat Berita Sekolah</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin-left:-6px; margin-right:-12px;">
    <div class="col-md-4 mb-3">
        <div class="card h-100 border-0" style="background:linear-gradient(135deg,#FFD6A5,#FFAD85); border-radius:15px;">
            <div class="card-body">
                <h5 style="font-size:16px; font-weight:600; margin-bottom:5px;">📜 Peraturan Sekolah</h5>
                <h2 style="font-size:24px; font-weight:700; margin-bottom:12px;">12 Peraturan</h2>
                <a href="{{ url('/peraturan') }}" class="btn btn-light w-100 mt-2">Lihat Peraturan Sekolah</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 border-0" style="background:linear-gradient(135deg,#FDFFB6,#CAFFBF); border-radius:15px;">
            <div class="card-body">
                <h5 style="font-size:16px; font-weight:600; margin-bottom:5px;">💰 Tabungan Siswa</h5>
                <h2 style="font-size:24px; font-weight:700; margin-bottom:12px;">150 Tabungan</h2>
                <a href="{{ url('/tabungan') }}" class="btn btn-light w-100 mt-2">Lihat Tabungan Siswa</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 border-0" style="background:linear-gradient(135deg,#FFC8DD,#FFAFCC); border-radius:15px;">
            <div class="card-body">
                <h5 style="font-size:16px; font-weight:600; margin-bottom:5px;">🏆 Peringkat Kelas</h5>
                <h2 style="font-size:24px; font-weight:700; margin-bottom:12px;">10 Peringkat</h2>
                <a href="{{ url('/peringkat') }}" class="btn btn-light w-100 mt-2">Lihat Peringkat Kelas</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 border-0" style="background:linear-gradient(135deg,#BDE0FE,#A2D2FF); border-radius:15px;">
            <div class="card-body">
                <h5 style="font-size:16px; font-weight:600; margin-bottom:5px;">👨‍🏫 Absensi Guru</h5>
                <h2 style="font-size:24px; font-weight:700; margin-bottom:12px;">20 Guru</h2>
                <a href="{{ url('/absensi-guru') }}" class="btn btn-light w-100 mt-2">Lihat Absensi Guru</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 border-0" style="background:linear-gradient(135deg,#E0AAFF,#C77DFF); border-radius:15px;">
            <div class="card-body">
                <h5 style="font-size:16px; font-weight:600; margin-bottom:5px;">✅ Absensi Siswa</h5>
                <h2 style="font-size:24px; font-weight:700; margin-bottom:12px;">150 Siswa</h2>
                <a href="{{ url('/absensi') }}" class="btn btn-light w-100 mt-2">Lihat Absensi Siswa</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 border-0" style="background:linear-gradient(135deg,#B5E48C,#99D98C); border-radius:15px;">
            <div class="card-body">
                <h5 style="font-size:16px; font-weight:600; margin-bottom:5px;">⚽ Ekstrakurikuler</h5>
                <h2 style="font-size:24px; font-weight:700; margin-bottom:12px;">8 Ekskul</h2>
                <a href="{{ url('/ekstrakurikuler') }}" class="btn btn-light w-100 mt-2">Lihat Ekstrakurikuler</a>
            </div>
        </div>
    </div>
</div>
@endsection