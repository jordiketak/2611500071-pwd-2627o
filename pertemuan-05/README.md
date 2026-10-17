# P5 - JavaScript Dasar, DOM, Event, dan Validasi Sisi Klien

## Deskripsi

Dokumentasi pengembangan halaman web pada P5, meliputi JavaScript, DOM, event listener, interaksi navigasi, dan validasi formulir sisi klien.

## Fitur dan Pengembangan

- Baseline P5: menyalin index.html, style.css, dan img/foto-profil.jpg dari pertemuan-04 ke pertemuan-05 sebagai dasar pengembangan.
- JavaScript eksternal: membuat berkas script.js dan menghubungkannya ke index.html menggunakan `<script src="script.js"></script>` sebelum tag `</body>`.
- Hamburger menu: menambahkan tombol navigasi (id navToggle) dan id navMenu pada index.html, menambahkan CSS untuk menyembunyikan menu di layar kecil dan class nav-open, serta menulis event click di script.js yang memakai classList.toggle() dan setAttribute() untuk aria-expanded dan aria-label.
- Validasi formulir: mengganti formulir pada index.html dengan versi yang memiliki id contactForm, formFeedback, dan atribut novalidate. Menulis event submit di script.js dengan event.preventDefault() dan pemeriksaan berurutan untuk nama, email, semester, tanggal, jenis pesan, topik, program studi, dan pesan.
- Umpan balik: pesan ditampilkan lewat formFeedback.textContent. Pesan gagal berwarna merah dan pesan berhasil berwarna hijau (class form-feedback-error dan form-feedback-success di style.css). Event input dan reset menghapus pesan lama.

## Pengujian

- Baseline P5: membuka pertemuan-05/index.html di Edge. Hasil aktual: halaman tampil, foto profil muncul, tampilan sama seperti P4.
- Hubungan script.js dan index.html: menambahkan `console.log("script.js berhasil dijalankan.")` sementara, membuka halaman, lalu melihat tab Console di DevTools. Hasil aktual: pesan muncul. Setelah kode pengujian dihapus dan halaman dimuat ulang, pesan tidak muncul lagi dan tidak ada galat di Console.
- Hamburger menu: membuka index.html di Edge dengan DevTools mode device. Lebar 400: tombol menu tampil dan menu tersembunyi. Lebar 1000: tombol menu hilang dan menu tampil berjejer. Klik tombol pertama kali: menu muncul. Klik kedua kali: menu tertutup. Atribut aria-expanded berubah saat tombol diklik. Tidak ada galat di Console.
- Validasi nama: nama "Al" (kurang dari 3 karakter). Hasil aktual: pesan "Nama lengkap harus diisi 3 sampai 50 karakter." muncul.
- Validasi email: email kosong dan email "a@s". Hasil aktual: pesan "Masukkan alamat email yang valid." muncul.
- Validasi semester: semester kosong dan semester 15. Hasil aktual: pesan validasi semester muncul.
- Validasi tanggal: tanggal kosong. Hasil aktual: pesan "Tanggal kunjungan harus diisi." muncul.
- Validasi jenis pesan: tidak ada radio button dipilih. Hasil aktual: pesan "Pilih jenis pesan." muncul.
- Validasi topik: tidak ada checkbox dipilih. Hasil aktual: pesan "Pilih minimal satu topik yang diminati." muncul.
- Validasi program studi: pilihan awal tidak diubah. Hasil aktual: pesan "Pilih program studi." muncul.
- Validasi berhasil: seluruh isian diisi sesuai aturan lalu klik Kirim. Hasil aktual: pesan "Form berhasil divalidasi." muncul berwarna hijau. Pesan ini hanya menyatakan validasi sisi klien lolos, data tidak dikirim ke server.
- Event input: mengubah salah satu isian setelah pesan hijau muncul. Hasil aktual: pesan hilang.
- Event reset: menekan tombol Batal setelah pesan merah muncul. Hasil aktual: pesan hilang.
- Validasi pesan: kolom pesan dikosongkan. Hasil aktual: pesan "Pesan harus diisi." muncul.
- Belum diuji: pesan yang hanya berisi spasi, batas 300 karakter pada textarea, dan nilai desimal pada semester.
## Riwayat Pengembangan

- Siapkan baseline P5 dan hubungkan JavaScript eksternal: menyalin baseline P4, membuat script.js, dan menguji koneksinya lewat Console.
- Tambah hamburger menu responsif: menambahkan tombol navigasi, CSS, dan event click, lalu diuji pada lebar 400 dan 1000.
- Tambah validasi formulir dan umpan balik P5: mengganti formulir, menulis validasi submit, pesan gagal dan berhasil, serta event input dan reset. Diuji di Edge dan hasilnya dicatat di bagian Pengujian.