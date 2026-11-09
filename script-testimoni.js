var rating = 0;
var semuaBintang = document.querySelectorAll('#rating span');

// ubah warna bintang sesuai rating yang dipilih
function warnaiBintang() {
  for (var i = 0; i < semuaBintang.length; i++) {
    if (i < rating) {
      semuaBintang[i].classList.add('aktif');
    } else {
      semuaBintang[i].classList.remove('aktif');
    }
  }
}

// klik bintang
for (var i = 0; i < semuaBintang.length; i++) {
  semuaBintang[i].onclick = function () {
    rating = Number(this.getAttribute('data-nilai'));
    warnaiBintang();
  };
}

// klik tombol kirim
document.getElementById('kirim').onclick = function () {
  var nama = document.getElementById('nama').value;
  var pesan = document.getElementById('pesan').value;
  var error = document.getElementById('error');

  // cek apakah semua sudah diisi
  if (nama == '' || pesan == '' || rating == 0) {
    error.innerHTML = 'Nama, rating, dan pesan harus diisi!';
    return;
  }
  error.innerHTML = '';

  // ambil tanggal hari ini
  var tanggal = new Date().toLocaleDateString('id-ID', {
    day: 'numeric',
    month: 'long',
    year: 'numeric'
  });

  // bikin bintang
  var bintang = '';
  for (var j = 1; j <= 5; j++) {
    if (j <= rating) {
      bintang += '★';
    } else {
      bintang += '<span class="kosong">★</span>';
    }
  }

  // bikin kotak testimoni baru
  var item = document.createElement('div');
  item.className = 'item';
  item.innerHTML =
    '<div class="foto"></div>' +
    '<div class="konten">' +
      '<div class="baris-atas">' +
        '<span class="nama"></span>' +
        '<span class="tanggal">' + tanggal + '</span>' +
      '</div>' +
      '<div class="bintang">' + bintang + '</div>' +
      '<p class="teks"></p>' +
    '</div>';

  // isi teks dari user pakai textContent supaya aman
  item.querySelector('.foto').textContent = nama.charAt(0).toUpperCase();
  item.querySelector('.nama').textContent = nama;
  item.querySelector('.teks').textContent = pesan;

  // taruh paling atas
  var daftar = document.getElementById('daftar');
  daftar.insertBefore(item, daftar.firstChild);

  // kosongkan form
  document.getElementById('nama').value = '';
  document.getElementById('pesan').value = '';
  rating = 0;
  warnaiBintang();
};