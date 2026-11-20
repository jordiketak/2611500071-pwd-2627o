# pertemuan 09

pada P9, yang saya lakukan adalah:

1. menyalin bahan artefak pertemuan 08, sebagai baseline pertemuan 9 dan menguji tampilan http://localhost/pwd/2611500071-pwd-2627o/pertemuan-09/ dimana hasilnya masih sama dengan bahan artefak pertemuan 08.
2. membuat fungsi bersihkan($teks) untuk membatalkan eksekusi skrip html atau javascript sebelum output dihasilkan.
3. membuat file dengan nama fungsi.php, berisi fungsi bersihkan() yang dipindahkan dari index.php. pada index.php diganti dengan include("fungsi.php"); setelah pengujian, hasilnya tetap sama antara penulisan fungsi bersihkan() langsung di index.php maupun setelah fungsi bersihkan() dipindahan ke fungsi.php.
4. membuat 1 session array assosiatif untuk menampung data dari form($_SESSION["form_data"]) dan output nya dengan for each.