# P6 - PHP Dasar dan Pemrograman Sisi Peladen

## Deskripsi

Dokumentasi pengembangan halaman web pada P6, meliputi PHP dasar, variabel, konstanta, operator, percabangan, dan perulangan.

## Fitur dan Pengembangan

- Baseline P6: menyalin index.html, script.js, style.css, dan img/foto-profil.jpg dari pertemuan-05 ke pertemuan-06, lalu mengubah nama index.html menjadi index.php.
- Dasar PHP: menguji tag PHP, komentar, echo, dan print menggunakan kode sementara di dalam body index.php. Kode sementara dihapus setelah pengujian.
- Variabel dan konstanta: menambahkan blok PHP di awal index.php berisi variabel (nim, namaMahasiswa, programStudi, tahunAkademik, semester, ipk, statusAktif, catatanTambahan) dan konstanta (NAMA_MATA_KULIAH, PROFIL_GITHUB). Nilai ipk dan semester adalah data contoh dari modul, bukan data asli.
- Konten dinamis: paragraf sapaan di bagian Selamat Datang menampilkan nama, nama mata kuliah, dan tahun akademik lewat PHP. Tautan GitHub di bagian Kontak memakai konstanta PROFIL_GITHUB.

## Cara Menjalankan

- Menjalankan Laragon (Start All), lalu membuka http://localhost/pwd/2611500071-pwd-2627o/pertemuan-06/ di Edge.

## Pengujian

- Laragon: Apache dan MySQL berstatus started setelah klik Start All.
- Akses halaman: membuka alamat localhost di atas. Hasil aktual: halaman profil tampil.
- Tag PHP: menambahkan echo "PHP berhasil dijalankan." setelah tag body. Hasil aktual: teks tampil di halaman. Pada View Page Source, yang terlihat hanya teks hasil keluaran, bukan kode PHP.
- Komentar dan echo: menambahkan komentar satu baris dan banyak baris serta echo. Hasil aktual: hanya teks echo yang tampil, isi komentar tidak tampil.
- Print: mengganti echo dengan print. Hasil aktual: teks "Keluaran menggunakan print." tampil.
- Kode pengujian sementara dihapus dan halaman dimuat ulang. Hasil aktual: tulisan pengujian tidak muncul lagi.
- Variabel dan konstanta: setelah blok PHP ditambahkan, halaman dimuat ulang. Hasil aktual: halaman tetap tampil.
- Konten dinamis: Hasil aktual: paragraf sapaan menampilkan "Halo, saya Jordi Prayuda. Saya sedang mempelajari matakuliah Pemrograman Web Dasar pada tahun akademik 2026/2027."
- Tautan GitHub: mengklik tautan profil GitHub saya. Hasil aktual: membuka profil GitHub jordiketak.

## Riwayat Pengembangan

- Siapkan baseline P6 dan ubah index.html menjadi index.php: menyalin baseline P5, mengganti ekstensi, dan menguji akses lewat localhost.
- Pengujian tag, komentar, echo, dan print PHP: menguji dasar PHP dan mencatat hasilnya.