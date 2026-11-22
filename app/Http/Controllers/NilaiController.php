<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['siswa','guru'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
        return view('nilai.create', compact('siswa','guru'));
    }

    public function store(Request $request)
    {
        $nilai_akhir = ($request->nilai_tugas + $request->nilai_uts + $request->nilai_uas) / 3;

        Nilai::create([
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'mata_pelajaran' => $request->mata_pelajaran,
            'nilai_tugas' => $request->nilai_tugas,
            'nilai_uts' => $request->nilai_uts,
            'nilai_uas' => $request->nilai_uas,
            'nilai_akhir' => $nilai_akhir,
        ]);

        return redirect()->route('nilai.index');
    }

    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $siswa = Siswa::all();
        $guru = Guru::all();
        return view('nilai.edit', compact('nilai','siswa','guru'));
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai_akhir = ($request->nilai_tugas + $request->nilai_uts + $request->nilai_uas) / 3;

        $nilai->update([
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'mata_pelajaran' => $request->mata_pelajaran,
            'nilai_tugas' => $request->nilai_tugas,
            'nilai_uts' => $request->nilai_uts,
            'nilai_uas' => $request->nilai_uas,
            'nilai_akhir' => $nilai_akhir,
        ]);

        return redirect()->route('nilai.index');
    }

    public function destroy($id)
    {
        Nilai::findOrFail($id)->delete();
        return redirect()->route('nilai.index');
    }
}