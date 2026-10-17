# P5 - JavaScript Dasar, DOM, Event, dan Validasi Sisi Klien

## Deskripsi

Dokumentasi pengembangan halaman web pada P5, meliputi JavaScript, DOM, event listener, interaksi navigasi, dan validasi formulir sisi klien.

## Fitur dan Pengembangan

- Baseline P5: menyalin index.html, style.css, dan img/foto-profil.jpg dari pertemuan-04 ke pertemuan-05 sebagai dasar pengembangan.
- JavaScript eksternal: membuat berkas script.js dan menghubungkannya ke index.html menggunakan `<script src="script.js"></script>` sebelum tag `</body>`.
- Hamburger menu: menambahkan tombol navigasi (id navToggle) dan id navMenu pada index.html, menambahkan CSS untuk menyembunyikan menu di layar kecil dan class nav-open, serta menulis event click di script.js yang memakai classList.toggle() dan setAttribute() untuk aria-expanded dan aria-label.

## Pengujian

- Baseline P5: membuka pertemuan-05/index.html di Edge. Hasil aktual: halaman tampil, foto profil muncul, tampilan sama seperti P4.
- Hubungan script.js dan index.html: menambahkan `console.log("script.js berhasil dijalankan.")` sementara, membuka halaman, lalu melihat tab Console di DevTools. Hasil aktual: pesan muncul. Setelah kode pengujian dihapus dan halaman dimuat ulang, pesan tidak muncul lagi dan tidak ada galat di Console.
- Hamburger menu: membuka index.html di Edge dengan DevTools mode device. Lebar 400: tombol menu tampil dan menu tersembunyi. Lebar 1000: tombol menu hilang dan menu tampil berjejer. Klik tombol pertama kali: menu muncul. Klik kedua kali: menu tertutup. Atribut aria-expanded berubah saat tombol diklik. Tidak ada galat di Console.

## Riwayat Pengembangan

- Siapkan baseline P5 dan hubungkan JavaScript eksternal: menyalin baseline P4, membuat script.js, dan menguji koneksinya lewat Console.