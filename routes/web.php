<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Nilai;

Route::get('/', function () { return redirect('/dashboard'); });
Route::get('/dashboard', function () { return view('dashboard.dashboard'); });

// SISWA
Route::get('/siswa', function () { $siswas = Siswa::all(); return view('siswa.index', compact('siswas')); });
Route::get('/siswa/create', function () { return view('siswa.create'); });
Route::post('/siswa', function (Request $request) {
    Siswa::create(['nis' => $request->nis, 'nama' => $request->nama, 'kelas' => $request->kelas, 'jurusan' => $request->jurusan]);
    return redirect('/siswa');
});
Route::delete('/siswa/{id}', function ($id) { Siswa::find($id)->delete(); return redirect('/siswa'); });

// GURU
Route::get('/guru', function () { $gurus = Guru::all(); return view('guru.index', compact('gurus')); });
Route::get('/guru/create', function () { return view('guru.create'); });
Route::post('/guru', function (Request $request) {
    Guru::create(['nip' => $request->nip, 'nama' => $request->nama, 'mapel' => $request->mapel, 'no_hp' => $request->no_hp]);
    return redirect('/guru');
});
Route::delete('/guru/{id}', function ($id) { Guru::find($id)->delete(); return redirect('/guru'); });

// NILAI - ANTI ERROR 1062!
Route::get('/nilai', function () { $nilais = Nilai::with('siswa')->get(); return view('nilai.index', compact('nilais')); });
Route::get('/nilai/create', function () { return view('nilai.create'); });
Route::post('/nilai', function (Request $request) {
    $nama = trim($request->nama_siswa);

    // 1. Cari dulu, kalau udah ada pakai yang lama
    $siswa = Siswa::where('nama', $nama)->first();

    // 2. Kalau belum ada, bikin baru dengan NIS UNIK (gak akan nabrak)
    if (!$siswa) {
        do {
            $nisBaru = 'AUTO' . rand(1000, 99999);
        } while (Siswa::where('nis', $nisBaru)->exists());

        $siswa = Siswa::create(['nis' => $nisBaru, 'nama' => $nama, 'kelas' => '-', 'jurusan' => '-']);
    }

    Nilai::create(['siswa_id' => $siswa->id, 'mapel' => $request->mapel, 'nilai' => $request->nilai]);
    return redirect('/nilai');
});
Route::delete('/nilai/{id}', function ($id) { Nilai::find($id)->delete(); return redirect('/nilai'); });

// ULANG TAHUN
Route::get('/dashboard/ulang-tahun', function () { return view('dashboard.ulang-tahun'); });

// JAM SEKOLAH
Route::get('/jam-sekolah', function () { return view('dashboard.jam-sekolah'); });

// BERITA SEKOLAH
Route::get('/berita-sekolah', function () { return view('dashboard.berita-sekolah'); });

// ULANG TAHUN
Route::get('/ulang-tahun', function () { return view('dashboard.ulang-tahun'); });

// PERATURAN
Route::get('/peraturan', function () { return view('dashboard.peraturan-sekolah'); });

// TABUNGAN SISWA
Route::get('/tabungan', function () { return view('dashboard.tabungan-siswa'); });

// PERINGKAT KELAS
Route::get('/peringkat', function () { return view('dashboard.peringkat-kelas-terbersih'); });

// ABSENSI GURU
Route::get('/absensi-guru', function () { return view('dashboard.absensi-guru'); });

// ABSENSI
Route::get('/absensi', function () { return view('dashboard.absensi'); });

// EKSTRAKURIKULER
Route::get('/ekstrakurikuler', function () { return view('dashboard.ekstrakurikuler'); });