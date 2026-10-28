# P7 - Pemrosesan Formulir dengan PHP, Validasi Sisi Peladen, dan PRG

## Deskripsi

Dokumentasi pengembangan halaman web pada P7, meliputi pengiriman formulir dengan GET dan POST, validasi sisi peladen, pengamanan keluaran HTML, session, dan pola Post-Redirect-Get (PRG).

## Fitur dan Pengembangan

- Baseline P7: menyalin index.php, script.js, style.css, dan img/foto-profil.jpg dari pertemuan-06 ke pertemuan-07 sebagai dasar pengembangan.
- Menerima data GET: menambahkan kode di bagian atas index.php yang membaca parameter nama lewat $_GET dan menampilkannya dengan htmlspecialchars().

## Cara Menjalankan

- Menjalankan Laragon (Start All), lalu membuka http://localhost/pwd/2611500071-pwd-2627o/pertemuan-07/ di Edge.

## Pengujian

- Laragon: Apache berstatus started setelah klik Start All.
- Akses halaman: membuka alamat localhost di atas. Hasil aktual: halaman profil tampil normal.
- GET lewat URL dengan ?nama=Andi: Hasil aktual: tampil "Nama yang diterima: Andi".
- GET lewat URL dengan ?nama=Budi%20Anduk: Hasil aktual: tampil "Nama yang diterima: Budi Anduk".
- Tanpa parameter nama: Hasil aktual: tidak ada tulisan "Nama yang diterima" dan tidak ada pesan error PHP.

## Riwayat Pengembangan

- Menyalin artefak pertemuan-06 ke pertemuan-07 untuk digunakan sebagai baseline.
- Mempelajari penggunaan parameter GET: menambahkan kode $_GET dan mengujinya lewat URL.