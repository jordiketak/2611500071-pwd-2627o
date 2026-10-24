# P6 - PHP Dasar dan Pemrograman Sisi Peladen

## Deskripsi

Dokumentasi pengembangan halaman web pada P6, meliputi PHP dasar, variabel, konstanta, operator, percabangan, dan perulangan.

## Fitur dan Pengembangan

- Baseline P6: menyalin index.html, script.js, style.css, dan img/foto-profil.jpg dari pertemuan-05 ke pertemuan-06, lalu mengubah nama index.html menjadi index.php.
- Dasar PHP: menguji tag PHP, komentar, echo, dan print menggunakan kode sementara di dalam body index.php. Kode sementara dihapus setelah pengujian.
- Variabel dan konstanta: menambahkan blok PHP di awal index.php berisi variabel (nim, namaMahasiswa, programStudi, tahunAkademik, semester, ipk, statusAktif, catatanTambahan) dan konstanta (NAMA_MATA_KULIAH, PROFIL_GITHUB). Nilai ipk dan semester adalah data contoh dari modul, bukan data asli.
- Konten dinamis: paragraf sapaan di bagian Selamat Datang menampilkan nama, nama mata kuliah, dan tahun akademik lewat PHP. Tautan GitHub di bagian Kontak memakai konstanta PROFIL_GITHUB.
- Operator: menambahkan perhitungan sisa semester (operator aritmetika), pemeriksaan rentang semester (operator perbandingan dan logika), dan status semester (operator ternary). Hasilnya ditampilkan di bagian Profil Singkat.
- Percabangan: menambahkan if-elseif-else untuk keterangan semester, operator ternary untuk nama program studi dan status mahasiswa, serta switch-case-default untuk fokus program studi. Nilai programStudi yang dipakai adalah TI.
- Perulangan: mengganti daftar Target Belajar statis dengan perulangan for (lima butir, memakai switch di dalamnya) dan menambahkan daftar Semester dengan perulangan while (tiga butir).

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
- Operator dengan semester 2: Hasil aktual: tampil "Sisa semester hingga batas: 6" dan "Pemeriksaan rentang semester: Sesuai rentang".
- Operator dengan semester 9 (diubah sementara): Hasil aktual: tampil "Sisa semester hingga batas: -1" dan "Pemeriksaan rentang semester: Perlu diperiksa". Nilai semester dikembalikan ke 2 dan hasil kembali seperti semula.
- if-elseif-else: semester 2 menampilkan "Semester: 2 (Semester awal)", semester 4 menampilkan "Semester menengah", semester 7 menampilkan "Semester akhir". Nilai semester dikembalikan ke 2.
- Ternary program studi dan status: dengan TI dan aktif true tampil "Program Studi: Teknik Informatika (TI)" dan "Status mahasiswa: Aktif". Dengan SI dan aktif false tampil "Sistem Informasi (SI)" dan "Tidak aktif". Nilai dikembalikan ke TI dan true.
- switch-case-default: TI menampilkan "Komputasi dan pengembangan perangkat lunak", SI menampilkan "Sistem informasi dan proses bisnis", MI menampilkan "Belum ditentukan". Nilai dikembalikan ke TI.
- Perulangan for: membuka halaman setelah daftar diganti. Hasil aktual: tampil lima butir, dari "Target belajar ke-1: Memahami sintaks dasar PHP." sampai "Target belajar ke-5: Belum dipetakan".
- Perulangan while: membuka halaman setelah daftar ditambahkan. Hasil aktual: tampil tiga butir, Semester 1, Semester 2, dan Semester 3.

## Riwayat Pengembangan

- Siapkan baseline P6 dan ubah index.html menjadi index.php: menyalin baseline P5, mengganti ekstensi, dan menguji akses lewat localhost.
- Pengujian tag, komentar, echo, dan print PHP: menguji dasar PHP dan mencatat hasilnya.
- Tampilkan data mahasiswa dengan variabel dan konstanta: menambahkan variabel, konstanta, dan keluaran dinamis di halaman.
- Terapkan operator PHP untuk sisa dan status semester: menambahkan operator dan menguji hasilnya.
- Terapkan percabangan if, ternary, dan switch: menambahkan percabangan dan menguji setiap kondisi.