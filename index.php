<?php
// Data kamar sementara. Nantinya dapat diganti dengan data dari database MySQL.
$daftar_kos = [
    [
        "nama" => "Kamar 1",
        "harga" => "5.000.000   ",
        "foto" => "images/kamar1.jpeg",
        "status" => "Tersedia"
    ],
    [
        "nama" => "Kamar 2",
        "harga" => "5.000.000",
        "foto" => "images/kamar2.jpeg",
        "status" => "Tersedia"
    ],
    [
        "nama" => "Kamar 3",
        "harga" => "5.000.000",
        "foto" => "images/kamar3.jpeg",
        "status" => "Tersedia"
    ],
    [
        "nama" => "Kamar 4",
        "harga" => "5.000.000",
        "foto" => "images/kamar4.jpeg",
        "status" => "Tersedia"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Kos Buk Yen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <!-- NAVBAR -->
        <header class="navbar">
            <a href="index.php" class="logo">
                <span class="logo-icon">⌂</span>
                <span>Kos Buk Yen</span>
            </a>

            <nav class="menu">
                <a href="index.php" class="active">Beranda</a>
                <a href="informasi_kos.php">Informasi Kos</a>
                <a href="testimoni.php">Testimoni</a>
                <a href="login.php">Login</a>
            </nav>

            <form class="search-top" action="informasi_kos.php" method="GET">
                <span>⌕</span>
                <input type="text" name="cari" placeholder="Cari kos...">
            </form>

            <a href="login.php" class="profile-icon" aria-label="Login">●</a>
        </header>

        <!-- BANNER BERANDA -->
        <section class="hero">
            <div class="hero-content">
                <h1>Temukan Kos Impianmu<br>di Kos Buk Yen</h1>
                <p>Kos nyaman, aman, dan strategis dengan fasilitas lengkap untuk kebutuhanmu.</p>

                <form class="search-main" action="informasi_kos.php" method="GET">
                    <span>⌕</span>
                    <input type="text" name="cari" placeholder="Cari lokasi atau nama kos...">
                    <button type="submit">Cari</button>
                </form>
            </div>

            
        </section>

        <!-- DAFTAR KOS -->
        <section class="kos-section" id="kos-tersedia">
            <div class="section-heading">
                <h2>Kos Tersedia</h2>
                <a href="detail_kos.php?kamar=<?= urlencode($kos['nama']); ?>"
                    class="btn-detail">Lihat Detail</a>
            </div>

            <div class="kos-grid">
                <?php foreach ($daftar_kos as $kos) : ?>
                    <article class="kos-card">
                        <div class="kos-photo">
                            <img src="<?= htmlspecialchars($kos['foto']); ?>" alt="<?= htmlspecialchars($kos['nama']); ?>">
                            <span class="status"><?= htmlspecialchars($kos['status']); ?></span>
                        </div>

                        <div class="kos-info">
                            <h3><?= htmlspecialchars($kos['nama']); ?></h3>
                            <p class="harga">Rp <?= htmlspecialchars($kos['harga']); ?> <span>/bulan</span></p>

                            <p class="fasilitas"><span>▣</span> 1 Ranjang</p>
                            <p class="fasilitas"><span>♨</span> Kamar Mandi Dalam</p>

                            <a href="detail_kos.php" class="btn-detail">Lihat Detail</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <footer>
            <p>© <?= date("Y"); ?> Kos Buk Yen. Temukan tempat tinggal nyamanmu.</p>
        </footer>
    </div>
</body>
</html>
