<h1>Tabungan Siswa</h1>
<p>Hari: Sabtu, 21 November 2026</p>

<hr>

<h3>Buat Tabungan Baru:</h3>
<input type="text" id="namaBaru" placeholder="Tulis nama baru... contoh: Rina" style="padding:10px; font-size:16px;">
<input type="text" id="kelasBaru" placeholder="Kelas... contoh: 5A" style="padding:10px; font-size:16px;">
<button onclick="tambahNama()" style="padding:10px 20px; font-size:16px; background:green; color:white;">+ Tambah Nama</button>

<hr>

<h3>Pilih Nama Siswa:</h3>
<select id="namaSiswa" onchange="gantiSiswa()" style="padding:10px; font-size:16px;">
    <option value="Budi">Budi - Kelas 5A</option>
    <option value="Ani">Ani - Kelas 5A</option>
    <option value="Siti">Siti - Kelas 4B</option>
    <option value="Andi">Andi - Kelas 6A</option>
</select>

<br><br>

<h2>Nama: <span id="tampilNama">Budi</span></h2>
<h2>Total Tabungan: Rp <span id="saldo">18000</span></h2>
<p>Terakhir Nabung: Jumat, 20 November 2026</p>

<hr>

<h3>Mau Nabung Berapa?</h3>
<button onclick="nabung(2000)" style="padding:10px 20px; font-size:16px;">Nabung Rp 2.000</button>
<button onclick="nabung(5000)" style="padding:10px 20px; font-size:16px;">Nabung Rp 5.000</button>
<button onclick="nabung(10000)" style="padding:10px 20px; font-size:16px;">Nabung Rp 10.000</button>

<br><br>
<a href="/dashboard">Balik ke Dashboard</a>

<script>
let dataTabungan = {
    'Budi': 18000,
    'Ani': 12000,
    'Siti': 25000,
    'Andi': 8000
};
let namaAktif = 'Budi';

function gantiSiswa() {
    namaAktif = document.getElementById('namaSiswa').value;
    document.getElementById('tampilNama').innerText = namaAktif;
    document.getElementById('saldo').innerText = dataTabungan[namaAktif];
}

function tambahNama() {
    let nama = document.getElementById('namaBaru').value;
    let kelas = document.getElementById('kelasBaru').value;

    if (nama == '') {
        alert('Isi dulu namanya!');
        return;
    }
    if (kelas == '') {
        kelas = '-';
    }

    if (dataTabungan[nama]) {
        alert('Nama ' + nama + ' sudah ada!');
        return;
    }

    dataTabungan[nama] = 0;

    let pilih = document.getElementById('namaSiswa');
    let optionBaru = document.createElement('option');
    optionBaru.value = nama;
    optionBaru.text = nama + ' - Kelas ' + kelas;
    pilih.add(optionBaru);

    pilih.value = nama;
    gantiSiswa();

    alert('Berhasil! Tabungan baru untuk ' + nama + ' sudah dibuat! Saldo awal Rp 0');
    document.getElementById('namaBaru').value = '';
    document.getElementById('kelasBaru').value = '';
}

function nabung(jumlah) {
    dataTabungan[namaAktif] = dataTabungan[namaAktif] + jumlah;
    document.getElementById('saldo').innerText = dataTabungan[namaAktif];
    alert(namaAktif + ' berhasil nabung Rp ' + jumlah + '! Saldo jadi Rp ' + dataTabungan[namaAktif]);
}
</script>