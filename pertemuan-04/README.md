# Pertemuan 4 - CSS3 Layout dan Responsive Web Design

## Pengembangan

- Perubahan yang dilakukan: Menyalin index.html dan folder img dari pertemuan-03 sebagai baseline. Memindahkan CSS internal dari index.html ke berkas style.css dan menghubungkannya dengan elemen link. Menerapkan CSS Box Model (box-sizing border-box, padding, border, margin) pada body, header, section Home, Tentang Saya, Kontak, dan footer. Menerapkan Flexbox pada navigasi (nav ul) dan CSS Grid pada elemen main (dua kolom, gap 16px, Kontak selebar penuh dengan grid-column). Menerapkan desain responsif mobile-first dengan media query min-width 768px.
- Commit dan push GitHub: Dilakukan bertahap setiap satu bagian selesai, yaitu menyalin baseline P3, memisahkan CSS dari HTML, menerapkan Box Model, menata elemen halaman, menerapkan Flexbox pada navigasi, menerapkan CSS Grid, dan menerapkan desain web responsif.

## Pengujian

- Perangkat bergerak: Diuji dengan Browser DevTools (Responsive Design Mode) pada lebar viewport 400px. Navigasi tersusun vertikal dan bagian Home, Tentang Saya, serta Kontak tersusun dalam satu kolom. Seluruh konten tampil dengan baik.
- Desktop: Diuji pada lebar viewport 1000px. Navigasi tersusun horizontal, bagian Home dan Tentang Saya tampil berdampingan dalam dua kolom, dan bagian Kontak membentang pada seluruh lebar.
- Galat dan perbaikan: Pada saat menambahkan elemen link ke index.html ditemukan salah ketik, yaitu huruf L kapital pada tag link, tanda kutip ganda pada atribut rel, dan spasi berlebih pada href="#home". Penyebabnya kesalahan pengetikan. Perbaikan dilakukan dengan menulis ulang elemen sesuai sintaks yang benar, lalu halaman diuji ulang di peramban dan CSS dari style.css berhasil diterapkan.
- Validasi CSS: style.css divalidasi menggunakan W3C CSS Validation Service (jigsaw.w3.org/css-validator). Hasilnya "Congratulations! No Error Found" sebagai CSS level 3 + SVG, sehingga tidak ada perbaikan yang diperlukan.

## Repositori

URL GitHub: https://github.com/jordiketak/2611500071-pwd-2627o