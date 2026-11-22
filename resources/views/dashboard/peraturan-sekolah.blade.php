@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <a href="{{ route('dashboard') }}" class="inline-block mb-4 text-blue-600 font-bold">← Kembali</a>

    <h1 class="text-2xl font-bold mb-1">📜 Peraturan Sekolah</h1>
    <p class="text-gray-500 mb-6">Wajib dibaca & ditaati semua siswa.</p>

    <div class="bg-white rounded-2xl shadow p-6 mb-6">
        <h2 class="text-lg font-bold mb-3">1. Aturan Seragam</h2>
        <table class="w-full">
            <tr class="bg-blue-600 text-white">
                <th class="text-left px-4 py-2">Hari</th>
                <th class="text-left px-4 py-2">Seragam</th>
            </tr>
            <tr class="border-b"><td class="px-4 py-2">Senin</td><td class="px-4 py-2">Abu Putih</td></tr>
            <tr class="border-b bg-gray-50"><td class="px-4 py-2">Selasa</td><td class="px-4 py-2">Abu Putih</td></tr>
            <tr class="border-b"><td class="px-4 py-2">Rabu</td><td class="px-4 py-2">Batik</td></tr>
            <tr class="border-b bg-gray-50"><td class="px-4 py-2">Kamis</td><td class="px-4 py-2">Seragam Hijau</td></tr>
            <tr><td class="px-4 py-2">Jumat</td><td class="px-4 py-2">Pramuka</td></tr>
        </table>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">
        <h2 class="text-lg font-bold mb-3">2. Peraturan Umum</h2>
        <ul class="space-y-2">
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