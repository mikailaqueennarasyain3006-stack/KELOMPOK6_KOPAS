<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimoni Penyewa - ShopMikaila</title>
  <link rel="stylesheet" href="style-testimoni.css">
</head>
<body>

  <!-- navbar -->
  <nav class="navbar">
    <a href="index.php" class="logo">🏠 ShopMikaila</a>

    <ul class="menu">
      <li><a href="index.php">Beranda</a></li>
      <li><a href="detail_kos.php">Informasi Kos</a></li>
      <li><a href="testimoni.php">Testimoni</a></li>
    </ul>

    <input type="text" class="cari" placeholder="Cari kos...">
  </nav>

  <div class="container">

    <!-- banner -->
    <div class="banner">
      <h1>★ Testimoni Penyewa</h1>
      <p>Kepuasan kamu adalah prioritas kami</p>
    </div>

    <div class="isi">

      <!-- form -->
      <div class="form-box">
        <h2>Tulis Testimoni</h2>

        <label for="nama">Nama</label>
        <input type="text" id="nama" placeholder="Masukkan nama kamu">

        <label>Rating</label>
        <div class="rating" id="rating">
          <span data-nilai="1">★</span>
          <span data-nilai="2">★</span>
          <span data-nilai="3">★</span>
          <span data-nilai="4">★</span>
          <span data-nilai="5">★</span>
        </div>

        <label for="pesan">Pesan</label>
        <textarea id="pesan" placeholder="Ceritakan pengalaman kamu..."></textarea>

        <p id="error"></p>
        <button id="kirim">Kirim Testimoni</button>
      </div>

      <!-- daftar testimoni -->
      <div id="daftar">

        <div class="item">
          <div class="foto">S</div>
          <div class="konten">
            <div class="baris-atas">
              <span class="nama">Sari Andini</span>
              <span class="tanggal">12 Oktober 2025</span>
            </div>
            <div class="bintang">★★★★★</div>
            <p class="teks">Kamarnya bersih, fasilitas lengkap, dan pengelolanya ramah. Sangat nyaman tinggal di sini!</p>
          </div>
        </div>

        <div class="item">
          <div class="foto">R</div>
          <div class="konten">
            <div class="baris-atas">
              <span class="nama">Rizky Pratama</span>
              <span class="tanggal">8 Oktober 2025</span>
            </div>
            <div class="bintang">★★★★★</div>
            <p class="teks">Lokasinya strategis, harga juga terjangkau. Sangat direkomendasikan!</p>
          </div>
        </div>

        <div class="item">
          <div class="foto">D</div>
          <div class="konten">
            <div class="baris-atas">
              <span class="nama">Dewi Lestari</span>
              <span class="tanggal">5 Oktober 2025</span>
            </div>
            <div class="bintang">★★★★<span class="kosong">★</span></div>
            <p class="teks">Suasananya tenang, cocok untuk belajar dan istirahat.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="script-testimoni.js"></script>
</body>
</html>