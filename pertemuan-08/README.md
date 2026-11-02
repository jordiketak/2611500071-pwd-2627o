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
7. Menambahkan validasi sisi klien dengan JavaScript di script.js (kolom wajib, panjang karakter, kategori, dan tanggal tidak boleh masa lalu).
8. Menambahkan styling CSS agar tampilan section Rencana Kegiatan mengikuti pola section#contact, serta badge kategori berwarna dan penghitung karakter sebagai ciri khas.
9. Melakukan pengujian dan mencatat hasilnya.

## Aturan Validasi
- Nama kegiatan: wajib, 3-100 karakter.
- Kategori: wajib, salah satu dari Akademik, Organisasi, Olahraga, Sosial, Lainnya.
- Tanggal: wajib, format valid, tidak boleh di masa lalu.
- Lokasi: wajib, 3-100 karakter.
- Deskripsi: wajib, 10-300 karakter.
- Validasi dilakukan di JavaScript (klien) dan PHP (peladen).

## Ciri Khas Pengembangan
- Badge kategori berwarna pada setiap rencana kegiatan.
- Penghitung karakter pada kolom deskripsi.
- Riwayat 5 rencana kegiatan terakhir yang tersimpan di session.
- Pesan sukses dan error ditampilkan sekali, lalu dihapus dari session.

## Pengujian
| No | Skenario | Hasil yang diharapkan | Hasil |
|----|----------|-----------------------|-------|
| 1 | Klik menu Rencana Kegiatan | Menuju section Rencana Kegiatan | Berhasil |
| 2 | Kirim formulir kosong | Pesan error dari JavaScript | Berhasil |
| 3 | Kirim data valid | Data tampil di daftar dengan badge kategori | Berhasil |
| 4 | Refresh setelah kirim | Data tidak terkirim ulang (PRG) | Berhasil |
| 5 | Nama berisi tag script | Tampil sebagai teks, tidak dijalankan | Berhasil |
| 6 | Tanggal masa lalu | Tidak bisa dipilih/ditolak | Berhasil (tanggal kemarin tidak bisa dipilih di kalender karena atribut min; validasi JS dan PHP sebagai cadangan) |
| 7 | Klik tombol Batal | Isian dan pesan error dibersihkan | Berhasil |
| 8 | Kirim formulir Kontak | Tetap berfungsi dan data tampil | Berhasil |

## Penggunaan AI
AI digunakan sebagai alat bantu untuk memahami alur POST-Redirect-Get dan menyusun kerangka kode. Seluruh kode saya baca, uji, dan sesuaikan sendiri.