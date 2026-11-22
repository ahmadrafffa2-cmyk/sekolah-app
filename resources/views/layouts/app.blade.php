<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-thumb { background: #555; }
        ::-webkit-scrollbar-thumb:hover { background: #333; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark" style="padding:12px 15px;">
    <div style="display:flex; justify-content:space-between; align-items:center; width:100%; gap:10px; flex-wrap:nowrap;">

        <a class="navbar-brand fw-bold" href="/dashboard" style="white-space:nowrap; font-size:19px; margin:0;">SMK JAYA MEDAN</a>

        <span style="flex:1; text-align:center; white-space:nowrap; font-weight:800; font-size:17px; overflow:hidden;">
            <span style="color:#FF9F1C;">Menerima Perbedaan,</span>
            <span style="color:white;"> Menciptakan Kesatuan</span>
        </span>

        <div style="display:flex; align-items:center; gap:10px; flex-shrink:0;">
         <span id="tanggalNavbar" class="text-white" style="font-size:15px; font-weight:700; letter-spacing:2px; white-space:nowrap;"></span>
            <form onsubmit="return false;" style="margin:0;">
                <input id="cariFitur" class="form-control" type="search" placeholder="Cari fitur..." style="width:160px; height:35px;">
            </form>
        </div>

    </div>
</nav>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script>
    // Tanggal di Navbar
    let t = new Date();
    document.getElementById('tanggalNavbar').innerText = t.toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });

    // Fungsi Cari - hanya jalan kalau ada kartu dashboard
    function cari() {
        let kata = document.getElementById('cariFitur').value.toLowerCase();
        document.querySelectorAll('[data-cari]').forEach(function(card) {
            let isi = card.getAttribute('data-cari').toLowerCase();
            card.style.display = isi.includes(kata) ? '' : 'none';
        });
    }
    let inputCari = document.getElementById('cariFitur');
    if (inputCari) {
        inputCari.addEventListener('input', cari);
    }

    // Jam - hanya jalan kalau ada elemen jam
    function setJam() {
        let jamEl = document.getElementById('jam');
        if (jamEl) {
            jamEl.innerText = new Date().toLocaleTimeString('id-ID');
        }
    }
    setInterval(setJam, 1000);
    setJam();

    // Hitung Ulang Tahun - hanya jalan kalau ada elemen hitung
    function hitungUltah() {
        let hitungEl = document.getElementById('hitung');
        if (!hitungEl) return;
        let ultah = new Date('2027-01-20');
        let sekarang = new Date();
        let selisih = Math.floor((ultah - sekarang) / (1000 * 60 * 60 * 24));
        hitungEl.innerText = selisih + ' Hari Lagi';
    }
    hitungUltah();
</script>

</body>
</html>