@extends('layouts.app')

@section('content')
<div class="container" style="max-width:900px;">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:15px;">
        <h2 style="font-weight:800; margin:0;">Ulang Tahun</h2>
        <button onclick="document.getElementById('formSetting').style.display='block'" style="background:#111; color:white; border:none; padding:10px 18px; border-radius:20px; font-weight:700; cursor:pointer;">⚙️ Setting / Tambah Siswa</button>
    </div>

    <div id="formSetting" style="display:none; background:white; border-radius:15px; padding:20px; margin-bottom:20px; border:2px dashed #FF6B9D;">
        <b>⚙️ Tambah Siswa Yang Ulang Tahun</b>
        <div class="row mt-3">
            <div class="col-md-4 mb-2"><input id="namaBaru" class="form-control" placeholder="Nama, misal: Rina"></div>
            <div class="col-md-3 mb-2"><input id="kelasBaru" class="form-control" placeholder="Kelas, misal: 5A"></div>
            <div class="col-md-3 mb-2"><input id="tanggalBaru" type="date" class="form-control"></div>
            <div class="col-md-2 mb-2"><button onclick="tambahSiswa()" style="background:#FF6B9D; color:white; border:none; padding:8px; width:100%; border-radius:10px; font-weight:700;">+ Tambah</button></div>
        </div>
        <button onclick="document.getElementById('formSetting').style.display='none'" style="background:#eee; border:none; padding:7px 15px; border-radius:10px; margin-top:5px;">Tutup</button>
    </div>

    <div style="background:#FFF3CD; border-radius:15px; padding:18px 20px; margin-bottom:20px; border-left:5px solid #FFD93D;">
        <b>💌 Ucapan Buat Budi:</b><br>
        <span style="color:#555;">"Selamat ulang tahun Budi! Semoga makin pintar, makin rajin, dan jadi anak kebanggaan kelas 5A!"</span>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div style="background:white; border-radius:15px; padding:18px; height:100%; box-shadow:0 2px 10px rgba(0,0,0,0.08);">
                <b>📅 Minggu Ini</b>
                <div id="listMingguIni" style="margin-top:10px; font-size:14px; line-height:2;">
                    🎈 Ani - 24 Nov<br>
                    🎈 Caca - 26 Nov<br>
                    🎈 Dedi - 27 Nov
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div style="background:white; border-radius:15px; padding:18px; height:100%; box-shadow:0 2px 10px rgba(0,0,0,0.08);">
                <b>🎁 Bulan Ini</b>
                <div style="margin-top:10px; font-size:14px; line-height:2;">
                    Total: <b><span id="totalBulan">8</span> Orang</b><br>
                    Siswa: <span id="totalSiswa">6</span> Orang<br>
                    Guru: 2 Orang
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div style="background:linear-gradient(135deg,#A2D2FF,#BDE0FE); border-radius:15px; padding:18px; height:100%;">
                <b>⭐ Yang Paling Dekat</b>
                <div style="margin-top:10px; font-size:14px;">
                    Besok giliran <b>Ani</b>!<br>
                    Siapin kado ya 😆
                </div>
            </div>
        </div>
    </div>

    <div style="background:white; border-radius:15px; padding:20px; box-shadow:0 2px 10px rgba(0,0,0,0.08);">
        <b>📋 Daftar Ulang Tahun November</b>
        <div id="listUltah" class="mt-3" style="font-size:14px;">
            <div style="display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid #eee;"><div>🎂 Budi</div><div>21 Nov</div><div><span class="badge bg-danger">Hari Ini</span></div></div>
            <div style="display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid #eee;"><div>🎈 Ani</div><div>24 Nov</div><div><span class="badge bg-warning text-dark">3 Hari Lagi</span></div></div>
            <div style="display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid #eee;"><div>🎈 Caca</div><div>26 Nov</div><div><span class="badge bg-secondary">5 Hari Lagi</span></div></div>
            <div style="display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid #eee;"><div>🎈 Dedi</div><div>27 Nov</div><div><span class="badge bg-secondary">6 Hari Lagi</span></div></div>
        </div>
    </div>

    <div style="text-align:center; margin-top:25px; margin-bottom:10px;">
        <button onclick="window.history.back()" style="background:#111; color:white; border:none; padding:12px 30px; border-radius:25px; font-weight:700; cursor:pointer; font-size:15px;">← Kembali</button>
    </div>

</div>

<script>
function formatTanggal(tanggal){ let bulan = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des']; let d = new Date(tanggal); return d.getDate() + ' ' + bulan[d.getMonth()]; }
function hitungSisa(tanggal){ let hariIni = new Date(); hariIni.setHours(0,0,0,0); let ultah = new Date(tanggal); let ultahTahunIni = new Date(hariIni.getFullYear(), ultah.getMonth(), ultah.getDate()); if(ultahTahunIni < hariIni){ ultahTahunIni = new Date(hariIni.getFullYear()+1, ultah.getMonth(), ultah.getDate()); } return Math.round((ultahTahunIni - hariIni)/(1000*60*60*24)); }
function badgeSisa(selisih){ if(selisih==0) return '<span class="badge bg-danger">Hari Ini</span>'; if(selisih==1) return '<span class="badge bg-warning text-dark">Besok</span>'; return '<span class="badge bg-secondary">'+selisih+' Hari Lagi</span>'; }

function tambahSiswa(){
    let nama = document.getElementById('namaBaru').value;
    let kelas = document.getElementById('kelasBaru').value;
    let tanggal = document.getElementById('tanggalBaru').value;
    if(!nama || !tanggal){ alert('Isi nama sama tanggalnya dulu!'); return; }
    let sisa = hitungSisa(tanggal);
    let tglCantik = formatTanggal(tanggal);
    let list = document.getElementById('listUltah');
    let div = document.createElement('div');
    div.style.cssText = 'display:flex; justify-content:space-between; padding:10px 0; border-bottom:1px solid #eee;';
    div.innerHTML = '<div>🎈 ' + nama + ' • Kelas ' + kelas + '</div><div>' + tglCantik + '</div><div>' + badgeSisa(sisa) + ' <button onclick="this.parentElement.parentElement.remove()" style="background:#ffe0e0; border:none; padding:3px 8px; border-radius:8px;">🗑️</button></div>';
    list.appendChild(div);
    let minggu = document.getElementById('listMingguIni');
    minggu.innerHTML += '🎈 ' + nama + ' - ' + tglCantik + ' (' + sisa + ' hari lagi)<br>';
    document.getElementById('totalBulan').innerText = parseInt(document.getElementById('totalBulan').innerText) + 1;
    document.getElementById('totalSiswa').innerText = parseInt(document.getElementById('totalSiswa').innerText) + 1;
    alert('Berhasil ditambah: ' + nama + ' - ' + sisa + ' hari lagi!');
    document.getElementById('formSetting').style.display = 'none';
    document.getElementById('namaBaru').value = '';
    document.getElementById('kelasBaru').value = '';
}
</script>
@endsection