# Pertemuan 3 - Formulir HTML dan CSS Dasar

## Baseline

- Menggunakan hasil P2 sebagai dasar pengembangan P3
- Menyalin index.html dan img/foto-profil.jpg ke pertemuan-03.

## Implementasi Formulir

- Elemen form yang digunakan: form, label, input, textarea, select, option, button
- Tipe input yang digunakan: text, email, number, date, radio, checkbox (6 tipe)
- Atribut validasi yang digunakan: required, minlength, maxlength, min, max, placeholder

## Pengujian GET dan POST

- Hasil pengujian GET: Data formulir dikirim lewat URL sebagai query string berpasangan name=value yang dipisah tanda &. Halaman tetap terbuka dan URL berubah menjadi index.html?nama=...&email=...
- Contoh URL encoding yang ditemukan: spasi pada nama menjadi tanda + (Jordi+Prayuda), tanda @ pada email menjadi %40, dan koma pada pesan menjadi %2C.
- Hasil pengujian POST: Setelah method diubah menjadi post, data tidak muncul di URL. Halaman menampilkan "405 Not Allowed" karena GitHub Pages adalah hosting statis tanpa pemrosesan peladen. Setelah pengujian, method dikembalikan ke get.

## CSS Dasar

- Selector elemen: #contact label, #contact h2, #contact button, #about h2, #about h3, #about p, #about ol
- Selector class: .form-group, .input-form
- Selector ID: #about, #contact
- Properti CSS dasar yang digunakan: color, background-color, font-family, font-size, font-weight, margin, padding, border, border-bottom

## Pengujian dan Perbaikan

- Galat yang ditemukan: Tidak ditemukan galat pada pengujian akhir.
- Penyebab galat: -
- Perbaikan yang dilakukan: -
- Hasil pengujian ulang: Label mengaktifkan kontrol input, validasi required, minlength, dan max bekerja, GET menampilkan query string, POST menghasilkan 405 Not Allowed, tampilan CSS rapi, foto profil dan navigasi berfungsi.

## GitHub Pages

URL: https://jordiketak.github.io/2611500071-pwd-2627o/pertemuan-03/