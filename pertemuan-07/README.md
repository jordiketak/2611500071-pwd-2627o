# P7 - Pemrosesan Formulir dengan PHP, Validasi Sisi Peladen, dan PRG

## Deskripsi

Dokumentasi pengembangan halaman web pada P7, meliputi pengiriman formulir dengan GET dan POST, validasi sisi peladen, pengamanan keluaran HTML, session, dan pola Post-Redirect-Get (PRG).

## Fitur dan Pengembangan

- Baseline P7: menyalin index.php, script.js, style.css, dan img/foto-profil.jpg dari pertemuan-06 ke pertemuan-07 sebagai dasar pengembangan.
- Menerima data GET: menambahkan kode di bagian atas index.php yang membaca parameter nama lewat $_GET dan menampilkannya dengan htmlspecialchars().
- Pengiriman formulir GET: menambahkan contactForm.submit() di script.js setelah validasi JavaScript berhasil, sehingga formulir benar-benar terkirim.
- Demonstrasi GET: menyalin index.php menjadi indexGet.php sebagai pembanding. Formulir di indexGet.php tetap memakai method get dengan action indexGet.php.
- Formulir utama POST: mengubah method formulir di index.php dari get menjadi post, dan mengganti pembacaan $_GET menjadi $_POST.
- Input lain: menambahkan pembacaan email, semester, tanggal, jenis pesan, program studi, pesan, dan minat dari $_POST dengan operator ??. Nama checkbox diubah dari minat menjadi minat[] agar diterima sebagai larik. Selector JavaScript pada script.js disesuaikan agar mengenali minat dan minat[].

## Cara Menjalankan

- Menjalankan Laragon (Start All), lalu membuka http://localhost/pwd/2611500071-pwd-2627o/pertemuan-07/ di Edge. Halaman demonstrasi GET ada di http://localhost/pwd/2611500071-pwd-2627o/pertemuan-07/indexGet.php.

## Pengujian

- Laragon: Apache berstatus started setelah klik Start All.
- Akses halaman: membuka alamat localhost di atas. Hasil aktual: halaman profil tampil normal.
- GET lewat URL dengan ?nama=Andi: Hasil aktual: tampil "Nama yang diterima: Andi".
- GET lewat URL dengan ?nama=Budi%20Anduk: Hasil aktual: tampil "Nama yang diterima: Budi Anduk".
- Tanpa parameter nama: Hasil aktual: tidak ada tulisan "Nama yang diterima" dan tidak ada pesan error PHP.
- Kirim formulir GET dengan data valid: Hasil aktual: halaman dimuat ulang, tampil "Nama yang diterima: Jordi Prayuda" dan data formulir muncul sebagai parameter di URL.
- Kirim formulir kosong: Hasil aktual: pesan validasi "Nama lengkap harus diisi 3 sampai 50 karakter." muncul.
- indexGet.php: membuka halaman, mengisi formulir dengan data valid, lalu klik Kirim. Hasil aktual: halaman dimuat ulang pada indexGet.php dan data formulir muncul sebagai parameter di URL.
- View Page Source index.php: Hasil aktual: formulir memakai method="post".
- Kirim formulir POST dengan data valid: Hasil aktual: tampil "Nama yang diterima: Jordi Prayuda" di atas halaman dan alamat di peramban tidak memuat parameter nama.
- Input lain dan checkbox: setelah kode ditambahkan, halaman dimuat ulang. Hasil aktual: halaman tetap tampil normal.
- index.php dengan dua topik dicentang: Hasil aktual: formulir terkirim, tidak ada pesan topik.
- index.php dengan satu topik (HTML): Hasil aktual: formulir terkirim.
- index.php tanpa topik: Hasil aktual: pesan "Pilih minimal satu topik yang diminati." muncul.
- indexGet.php dengan satu topik: Hasil aktual: formulir terkirim.
- indexGet.php tanpa topik: Hasil aktual: pesan "Pilih minimal satu topik yang diminati." muncul.

## Riwayat Pengembangan

- Menyalin artefak pertemuan-06 ke pertemuan-07 untuk digunakan sebagai baseline.
- Mempelajari penggunaan parameter GET: menambahkan kode $_GET dan mengujinya lewat URL.
- Mempraktikkan pengiriman formulir GET: menambahkan contactForm.submit() di script.js.
- Menyimpan demonstrasi formulir GET: membuat indexGet.php.
- Mengubah formulir utama menjadi POST dan menerima data lewat $_POST.
- Menyesuaikan pembacaan input dan validasi formulir: menambahkan pembacaan input lain, minat[], dan selector JavaScript.