@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <a href="/dashboard" style="display:inline-block; background:#2563eb; color:white; padding:8px 18px; border-radius:999px; font-weight:bold; font-size:14px; text-decoration:none; box-shadow:0 4px 10px rgba(0,0,0,0.15); margin-bottom:16px;">← Kembali</a>

    <h1 class="text-2xl font-bold mb-1">📜 Peraturan Sekolah</h1>
    <p class="text-gray-500 mb-6">Wajib dibaca & ditaati semua siswa.</p>

    <div class="bg-white rounded-2xl shadow p-6 mb-6">
        <h2 class="text-lg font-bold" style="margin-bottom:8px;">1. Aturan Seragam</h2>
        <ul class="space-y-2" style="margin-top:0;">
            <li>📅 <b>Senin</b> - Abu Putih</li>
            <li>📅 <b>Selasa</b> - Abu Putih</li>
            <li>📅 <b>Rabu</b> - Batik</li>
            <li>📅 <b>Kamis</b> - Seragam Hijau</li>
            <li>📅 <b>Jumat</b> - Pramuka</li>
        </ul>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
        <h2 class="text-lg font-bold" style="margin-bottom:8px;">2. Peraturan Umum</h2>
        <ul class="space-y-2" style="margin-top:0;">
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