# UTS Pemrograman Web Dasar - Formulir Rencana Kegiatan Mahasiswa

Nama: Jordi Prayuda
NIM: 2611500071
Kelompok: TI1A
Hari/Tanggal: Senin, 02 November 2026

## Deskripsi
Pengembangan aplikasi web dari bahan-pertemuan-08 dengan menambahkan fitur Formulir Rencana Kegiatan Mahasiswa tanpa menghilangkan fitur yang sudah ada (Beranda, Tentang, Kontak).

## Tahapan Pengerjaan
1. Mengekstrak bahan-pertemuan-08 ke folder pertemuan-08, menjalankannya di localhost (Laragon), lalu commit awal.
2. Mengganti data contoh (nama, NIM, program studi, GitHub) dengan data sendiri.
3. Menambahkan menu Rencana Kegiatan pada navigasi (menuju section #rencana).
4. Menambahkan section Rencana Kegiatan Mahasiswa sebelum section#contact dengan formulir: Nama Kegiatan, Kategori Kegiatan, Tanggal Pelaksanaan, Lokasi Kegiatan, Deskripsi Kegiatan, serta tombol Kirim dan Batal.
5. Menambahkan pemrosesan PHP: data dikirim dengan metode POST, divalidasi di sisi peladen, dirapikan (trim dan normalisasi spasi), disimpan ke session, lalu pengguna diarahkan kembali (Post-Redirect-Get).
6. Menampilkan data dengan htmlspecialchars() agar keluaran HTML aman.

## Tahap Berikutnya (belum dikerjakan)
- Validasi sisi klien dengan JavaScript.
- Styling CSS (badge kategori, daftar rencana).
- Pengujian dan pencatatan hasil.

## Pengujian
Belum dilakukan.