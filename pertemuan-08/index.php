<?php
session_start();
date_default_timezone_set("Asia/Jakarta");

function h($teks)
{
	return htmlspecialchars((string) $teks, ENT_QUOTES, "UTF-8");
}

const KATEGORI_KEGIATAN = ["Akademik", "Organisasi", "Olahraga", "Sosial", "Lainnya"];

// UTS: memproses formulir Rencana Kegiatan Mahasiswa (POST -> validasi -> session -> redirect).
if ($_SERVER["REQUEST_METHOD"] === "POST" && ($_POST["aksi"] ?? "") === "rencana") {
	$rapikan = fn($v) => trim((string) preg_replace('/\s+/u', ' ', (string) $v));

	$namaKegiatan = $rapikan($_POST["nama_kegiatan"] ?? "");
	$kategori = $rapikan($_POST["kategori_kegiatan"] ?? "");
	$tanggalKegiatan = trim((string) ($_POST["tanggal_kegiatan"] ?? ""));
	$lokasi = $rapikan($_POST["lokasi_kegiatan"] ?? "");
	$deskripsi = trim(str_replace(["\r\n", "\r"], "\n", (string) ($_POST["deskripsi_kegiatan"] ?? "")));
	$deskripsi = (string) preg_replace("/\n{3,}/", "\n\n", $deskripsi);

	$errors = [];

	if (mb_strlen($namaKegiatan) < 3 || mb_strlen($namaKegiatan) > 100) {
		$errors[] = "Nama kegiatan harus 3 sampai 100 karakter.";
	}
	if (!in_array($kategori, KATEGORI_KEGIATAN, true)) {
		$errors[] = "Pilih kategori kegiatan yang tersedia.";
	}
	$tgl = DateTime::createFromFormat("Y-m-d", $tanggalKegiatan);
	if (!$tgl || $tgl->format("Y-m-d") !== $tanggalKegiatan) {
		$errors[] = "Tanggal pelaksanaan tidak valid.";
	} elseif ($tanggalKegiatan < date("Y-m-d")) {
		$errors[] = "Tanggal pelaksanaan tidak boleh di masa lalu.";
	}
	if (mb_strlen($lokasi) < 3 || mb_strlen($lokasi) > 100) {
		$errors[] = "Lokasi kegiatan harus 3 sampai 100 karakter.";
	}
	if (mb_strlen($deskripsi) < 10 || mb_strlen($deskripsi) > 300) {
		$errors[] = "Deskripsi kegiatan harus 10 sampai 300 karakter.";
	}

	$input = [
		"nama" => $namaKegiatan,
		"kategori" => $kategori,
		"tanggal" => $tanggalKegiatan,
		"lokasi" => $lokasi,
		"deskripsi" => $deskripsi,
	];

	if ($errors) {
		$_SESSION["rk_errors"] = $errors;
		$_SESSION["rk_old"] = $input;
	} else {
		$daftar = $_SESSION["rk_daftar"] ?? [];
		array_unshift($daftar, $input);
		$_SESSION["rk_daftar"] = array_slice($daftar, 0, 5);
		$_SESSION["rk_sukses"] = "Rencana kegiatan berhasil disimpan.";
	}

	// PRG: mencegah kirim ulang saat halaman di-refresh.
	header("Location: index.php#rencana");
	exit;
}

$rkErrors = $_SESSION["rk_errors"] ?? [];
$rkOld = $_SESSION["rk_old"] ?? [];
$rkSukses = $_SESSION["rk_sukses"] ?? "";
$rkDaftar = $_SESSION["rk_daftar"] ?? [];
unset($_SESSION["rk_errors"], $_SESSION["rk_old"], $_SESSION["rk_sukses"]);

// P7: Memproses data formulir dan menyimpannya ke dalam session.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$nama = trim((string) ($_POST["nama"] ?? ""));
	$email = trim((string) ($_POST["email"] ?? ""));
	$semesterForm = trim((string) ($_POST["semester"] ?? ""));
	$tanggal = trim((string) ($_POST["tanggal"] ?? ""));
	$jenisPesan = trim((string) ($_POST["jenis_pesan"] ?? ""));
	$minat = $_POST["minat"] ?? [];
	$prodi = trim((string) ($_POST["prodi"] ?? ""));
	$pesan = trim((string) ($_POST["pesan"] ?? ""));

	// Checkbox dapat mengirimkan lebih dari satu nilai.
	if (!is_array($minat)) {
		$minat = [];
	}

	// Menyimpan setiap nilai formulir ke dalam session secara terpisah.
	$_SESSION["nama"] = $nama;
	$_SESSION["email"] = $email;
	$_SESSION["semester"] = $semesterForm;
	$_SESSION["tanggal"] = $tanggal;
	$_SESSION["jenis_pesan"] = $jenisPesan;
	$_SESSION["minat"] = $minat;
	$_SESSION["prodi"] = $prodi;
	$_SESSION["pesan"] = $pesan;

	// PRG: mencegah pengiriman POST berulang ketika halaman dimuat ulang.
	header("Location: index.php#contact");
	exit;
}

// Mengamankan data sebelum ditampilkan kembali ke halaman HTML.
// P6: PHP dasar dan pemrograman sisi peladen
// Bagian 1: Variabel dan konstanta
$nim = "2611500071";
$namaMahasiswa = "Jordi Prayuda";
$programStudi = "TI";
$tahunAkademik = "2026/2027";
$semester = 4;
$ipk = 3.75;
$statusAktif = true;
$catatanTambahan = null;

const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "Jordiketak";

// Bagian 2: Operator
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
$semesterValid = $semester >= 1 && $semester <= $batasSemester;
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";

// Bagian 3: Percabangan if-elseif-else
if ($semester < 3) {
	$keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
	$keteranganSemester = "Semester menengah";
} else {
	$keteranganSemester = "Semester akhir";
}

$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informatika" : "Lainnya");

// Bagian 4: Percabangan switch-case-default
switch ($programStudi) {
	case "SI":
		$fokusProgramStudi = "Sistem informasi dan proses bisnis";
		break;
	case "TI":
		$fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
		break;
	default:
		$fokusProgramStudi = "Belum ditentukan";
}
?>
<!doctype html>
<html lang="id">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Profil Mahasiswa</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<header>
		<div class="header-top">
			<h1>Profil Mahasiswa</h1>

			<button
				class="nav-toggle"
				id="navToggle"
				type="button"
				aria-label="Buka navigasi"
				aria-controls="navMenu"
				aria-expanded="false">
				&#9776;
			</button>
		</div>

		<nav>
			<ul id="navMenu">
				<li><a href="#home">Beranda</a></li>
				<li><a href="#about">Tentang</a></li>
				<li><a href="#rencana">Rencana Kegiatan</a></li>
				<li><a href="#contact">Kontak</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section id="home">
			<h2>Selamat Datang</h2>
			<p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari matakuliah <strong><?php print NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik; ?>.</p>

			<img src="img/foto-profil.jpg" alt="Foto profil Nama Mahasiswa" />
		</section>

		<section id="about">
			<h2>Tentang Saya</h2>

			<article>
				<h3>Profil Singkat</h3>
				<p>Program Studi: <?php echo $namaProdi . " (" . $programStudi . ")"; ?></p>
				<p>Fokus program studi: <?php echo $fokusProgramStudi; ?></p>
				<p>Status mahasiswa: <?php echo $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
				<p>Semester: <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p>
				<p>Sisa semester hingga batas: <?php echo $sisaSemester; ?></p>
				<p>Pemeriksaan rentang semester: <?php echo $statusSemester; ?></p>
				<p>IPK: <?php echo number_format($ipk, 2, ',', '.'); ?></p>
				<p>Catatan tambahan: <?php echo $catatanTambahan === null ? "Belum ada" : $catatanTambahan; ?></p>

				<h3>Target Belajar (Perulangan for)</h3>
				<ol>
					<?php
					// Perulangan for tanpa array; materi larik dibahas pada P9.
					for ($i = 1; $i <= 5; $i++) {
						echo "<li>Target belajar ke-" . $i . ": ";
						switch ($i) {
							case 1:
								echo "Memahami sintaks dasar PHP.";
								break;
							case 2:
								echo "Menggunakan variabel dan konstanta.";
								break;
							case 3:
								echo "Menerapkan operator dan percabangan.";
								break;
							case 4:
								echo "Menggunakan perulangan for dan while.";
								break;
							default:
								echo "Belum dipetakan";
								break;
						}
						echo "</li>";
					}
					?>
				</ol>

				<h3>Semester (Perulangan while):</h3>
				<ol>
					<?php
					$nomorSemester = 1;
					while ($nomorSemester <= 3) {
						echo "<li>Semester " . $nomorSemester . "</li>";
						$nomorSemester++; // operator penugasan
					}
					?>
				</ol>
			</article>
		</section>
		<section id="rencana">
	<h2>Rencana Kegiatan Mahasiswa</h2>

	<?php if ($rkSukses !== ""): ?>
		<p class="rk-sukses" role="status"><?= h($rkSukses) ?></p>
	<?php endif; ?>

	<?php if ($rkErrors): ?>
		<div class="form-feedback-error" role="alert">
			<ul>
				<?php foreach ($rkErrors as $pesanError): ?>
					<li><?= h($pesanError) ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>

	<form id="rencanaForm" class="js-rencana-form" data-validation="rencana" action="index.php" method="post" novalidate>
		<input type="hidden" name="aksi" value="rencana" />

		<div class="form-group">
			<label for="rk-nama">Nama Kegiatan</label><br />
			<input class="input-form" type="text" id="rk-nama" name="nama_kegiatan"
				placeholder="Contoh: Seminar Web Programming" minlength="3" maxlength="100" required
				value="<?= h($rkOld["nama"] ?? "") ?>" />
		</div>

		<div class="form-group">
			<label for="rk-kategori">Kategori Kegiatan</label><br />
			<select class="input-form" id="rk-kategori" name="kategori_kegiatan" required>
				<option value="">-- Pilih Kategori --</option>
				<?php foreach (KATEGORI_KEGIATAN as $kat): ?>
					<option value="<?= h($kat) ?>" <?= (($rkOld["kategori"] ?? "") === $kat) ? "selected" : "" ?>><?= h($kat) ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label for="rk-tanggal">Tanggal Pelaksanaan</label><br />
			<input class="input-form" type="date" id="rk-tanggal" name="tanggal_kegiatan"
				min="<?= date("Y-m-d") ?>" required value="<?= h($rkOld["tanggal"] ?? "") ?>" />
		</div>

		<div class="form-group">
			<label for="rk-lokasi">Lokasi Kegiatan</label><br />
			<input class="input-form" type="text" id="rk-lokasi" name="lokasi_kegiatan"
				placeholder="Contoh: LAB.3 ISB Atma Luhur" minlength="3" maxlength="100" required
				value="<?= h($rkOld["lokasi"] ?? "") ?>" />
		</div>

		<div class="form-group">
			<label for="rk-deskripsi">Deskripsi Kegiatan</label><br />
			<textarea class="input-form" id="rk-deskripsi" name="deskripsi_kegiatan" maxlength="300"
				placeholder="Jelaskan kegiatan Anda" required><?= h($rkOld["deskripsi"] ?? "") ?></textarea>
			<small data-char-count>0/300</small>
		</div>

		<button type="submit">Kirim</button>
		<button type="reset">Batal</button>
		<p class="form-feedback" data-form-feedback aria-live="polite"></p>
	</form>

	<?php if ($rkDaftar): ?>
		<div id="hasilRencana" class="submission-result" aria-live="polite">
			<h3>Daftar Rencana Kegiatan</h3>
			<?php foreach ($rkDaftar as $item): ?>
				<article class="rk-item">
					<h4>
						<?= h($item["nama"]) ?>
						<span class="rk-badge rk-<?= h(strtolower($item["kategori"])) ?>"><?= h($item["kategori"]) ?></span>
					</h4>
					<p><strong>Tanggal:</strong> <?= h(date("d-m-Y", strtotime($item["tanggal"]))) ?></p>
					<p><strong>Lokasi:</strong> <?= h($item["lokasi"]) ?></p>
					<p><strong>Deskripsi:</strong> <?= nl2br(h($item["deskripsi"])) ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>

		<section id="contact">
			<h2>Kontak</h2>

			<p>
				Kunjungi
				<a target="_blank" href="https://github.com/<?= PROFIL_GITHUB ?>">profil GitHub saya</a>.
			</p>

			<form id="contactForm" class="js-contact-form" data-validation="contact" action="index.php" method="post" novalidate>
				<div class="form-group">
					<label for="nama">Nama Lengkap</label><br />

					<input
						class="input-form"
						type="text"
						id="nama"
						name="nama"
						placeholder="Masukkan nama lengkap"
						minlength="3"
						maxlength="50"
						required />
				</div>

				<div class="form-group">
					<label for="email">Email</label><br />

					<input class="input-form" type="email" id="email" name="email" placeholder="nama@email.com" required />
				</div>

				<div class="form-group">
					<label for="semester">Semester</label><br />

					<input class="input-form" type="number" id="semester" name="semester" min="1" max="14" required />
				</div>

				<div class="form-group">
					<label for="tanggal">Tanggal Kunjungan</label><br />

					<input class="input-form" type="date" id="tanggal" name="tanggal" required />
				</div>

				<div class="form-group">
					<p>Jenis Pesan</p>

					<input type="radio" id="pertanyaan" name="jenis_pesan" value="pertanyaan" required />
					<label for="pertanyaan">Pertanyaan</label>

					<input type="radio" id="saran" name="jenis_pesan" value="saran" />
					<label for="saran">Saran</label>
				</div>

				<div class="form-group">
					<p>Topik yang Diminati</p>

					<input type="checkbox" id="minat-html" name="minat[]" value="HTML" />
					<label for="minat-html">HTML</label>

					<input type="checkbox" id="minat-css" name="minat[]" value="CSS" />
					<label for="minat-css">CSS</label>
				</div>

				<div class="form-group">
					<label for="prodi">Program Studi</label><br />

					<select class="input-form" id="prodi" name="prodi" required>
						<option value="">-- Pilih Program Studi --</option>
						<option value="SI">Sistem Informasi</option>
						<option value="TI">Teknik Informatika</option>
					</select>
				</div>

				<div class="form-group">
					<label for="pesan">Pesan</label><br />

					<textarea
						class="input-form"
						id="pesan"
						name="pesan"
						maxlength="300"
						placeholder="Tulis pesan Anda"
						required></textarea>
				</div>

				<button type="submit">Kirim</button>
				<button type="reset">Batal</button>
				<p class="form-feedback" data-form-feedback aria-live="polite"></p>
			</form>

			<?php if (isset($_SESSION["nama"])): ?>
				<article id="hasilKontak" class="submission-result" aria-live="polite">
					<h3>Data Formulir yang Dikirim</h3>
					<p><strong>Nama Lengkap:</strong> <?= htmlspecialchars($_SESSION["nama"] ?? "", ENT_QUOTES, "UTF-8") ?></p>
					<p><strong>Email:</strong> <?= htmlspecialchars($_SESSION["email"] ?? "", ENT_QUOTES, "UTF-8") ?></p>
					<p><strong>Semester:</strong> <?= htmlspecialchars($_SESSION["semester"] ?? "", ENT_QUOTES, "UTF-8") ?></p>
					<p><strong>Tanggal Kunjungan:</strong> <?= htmlspecialchars($_SESSION["tanggal"] ?? "", ENT_QUOTES, "UTF-8") ?></p>
					<p><strong>Jenis Pesan:</strong> <?= htmlspecialchars($_SESSION["jenis_pesan"] ?? "", ENT_QUOTES, "UTF-8") ?></p>
					<p><strong>Topik yang Diminati:</strong>
						<?= htmlspecialchars(implode(", ", $_SESSION["minat"] ?? []), ENT_QUOTES, "UTF-8") ?>
					</p>
					<p><strong>Program Studi:</strong> <?= htmlspecialchars($_SESSION["prodi"] ?? "", ENT_QUOTES, "UTF-8") ?></p>
					<p><strong>Pesan:</strong> <?= nl2br(htmlspecialchars($_SESSION["pesan"] ?? "", ENT_QUOTES, "UTF-8")) ?></p>
				</article>
			<?php endif; ?>
		</section>
	</main>

	<footer>
		<p>&copy; <?= date("Y") ?> <?php echo $namaMahasiswa; ?> [<?= $nim ?>]</p>
	</footer>
	<script src="script.js"></script>
</body>

</html>