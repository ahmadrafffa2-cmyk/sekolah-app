@extends('layouts.app')

@section('content')
<div style="max-width:620px; margin:0 auto;">
    <a href="/dashboard" style="display:inline-block; background:#2563eb; color:white; padding:8px 18px; border-radius:999px; font-weight:bold; font-size:14px; text-decoration:none; box-shadow:0 4px 10px rgba(0,0,0,0.15); margin-bottom:16px;">← Kembali</a>

    <h1 class="text-2xl font-bold mb-1">📜 Peraturan Sekolah</h1>
    <p class="text-gray-500 mb-6">Wajib dibaca & ditaati semua siswa.</p>

    <div style="background:white; border-radius:16px; box-shadow:0 2px 10px rgba(0,0,0,0.08); padding:18px 20px; margin-bottom:16px;">
        <h2 class="text-lg font-bold" style="margin:0 0 8px 0;">1. Aturan Seragam</h2>
        <ul style="margin:0; padding-left:18px; line-height:1.8;">
            <li><b>Senin</b> - Abu Putih</li>
            <li><b>Selasa</b> - Abu Putih</li>
            <li><b>Rabu</b> - Batik</li>
            <li><b>Kamis</b> - Seragam Hijau</li>
            <li><b>Jumat</b> - Pramuka</li>
        </ul>
    </div>

    <div style="background:white; border-radius:16px; box-shadow:0 2px 10px rgba(0,0,0,0.08); padding:18px 20px;">
        <h2 class="text-lg font-bold" style="margin:0 0 8px 0;">2. Peraturan Umum</h2>
        <ul style="margin:0; padding-left:18px; line-height:1.8;">
            <li>✅ Datang tepat waktu sebelum jam 07.30</li>
            <li>✅ Memakai seragam sesuai jadwal di atas</li>
            <li>✅ Memakai sepatu hitam dan kaos kaki putih</li>
            <li>🚫 Dilarang membawa HP saat pelajaran</li>
            <li>✅ Menjaga kebersihan kelas dan lingkungan sekolah</li>
            <li>✅ Wajib mengikuti upacara hari Senin</li>
        </ul>
    </div>
</div>
@endsection