@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-1">📜 Peraturan Sekolah</h1>
    <p class="text-gray-500 mb-6">Wajib dibaca & ditaati semua siswa.</p>

    {{-- 1. SERAGAM --}}
    <div class="bg-white rounded-2xl shadow p-6 mb-6">
        <h2 class="text-lg font-bold mb-4">1. Aturan Seragam</h2>
        <table class="w-full overflow-hidden rounded-xl">
            <thead>
                <tr class="bg-blue-600 text-white">
                    <th class="text-left px-4 py-3">Hari</th>
                    <th class="text-left px-4 py-3">Seragam</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b"><td class="px-4 py-3 font-medium">Senin</td><td class="px-4 py-3">Abu Putih</td></tr>
                <tr class="border-b bg-gray-50"><td class="px-4 py-3 font-medium">Selasa</td><td class="px-4 py-3">Abu Putih</td></tr>
                <tr class="border-b"><td class="px-4 py-3 font-medium">Rabu</td><td class="px-4 py-3">Batik</td></tr>
                <tr class="border-b bg-gray-50"><td class="px-4 py-3 font-medium">Kamis</td><td class="px-4 py-3">Seragam Hijau</td></tr>
                <tr><td class="px-4 py-3 font-medium">Jumat</td><td class="px-4 py-3">Pramuka</td></tr>
            </tbody>
        </table>
    </div>

    {{-- 2. PERATURAN UMUM --}}
    <div class="bg-white rounded-2xl shadow p-6">
        <h2 class="text-lg font-bold mb-4">2. Peraturan Umum</h2>
        <ul class="space-y-3">
            <li class="flex gap-3"><span>✅</span> Datang tepat waktu sebelum jam 07.30</li>
            <li class="flex gap-3"><span>✅</span> Memakai seragam sesuai jadwal di atas</li>
            <li class="flex gap-3"><span>✅</span> Memakai sepatu hitam dan kaos kaki putih</li>
            <li class="flex gap-3"><span>🚫</span> Dilarang membawa HP saat pelajaran</li>
            <li class="flex gap-3"><span>✅</span> Menjaga kebersihan kelas dan lingkungan sekolah</li>
            <li class="flex gap-3"><span>✅</span> Wajib mengikuti upacara hari Senin</li>
        </ul>
    </div>

    <a href="/dashboard" class="inline-block mt-6 text-blue-600 font-medium">← Balik ke Dashboard</a>
</div>
@endsection