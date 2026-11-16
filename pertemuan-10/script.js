// Navigasi responsif.
const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");

if (navToggle && navMenu) {
  navToggle.addEventListener("click", () => {
    const isOpen = navMenu.classList.toggle("nav-open");
    navToggle.setAttribute("aria-expanded", String(isOpen));
    navToggle.setAttribute(
      "aria-label",
      isOpen ? "Tutup navigasi" : "Buka navigasi",
    );
  });
}

// Validasi formulir Kontak.
// Selector menggunakan atribut/class, bukan ID formulir tertentu,
// sehingga formulir lain dapat ditambahkan dengan ID yang berbeda.
const contactForms = document.querySelectorAll(
  'form[data-validation="contact"]',
);

contactForms.forEach((contactForm) => {
  const formFeedback = contactForm.querySelector("[data-form-feedback]");

  const ambilInput = (nama) => contactForm.elements.namedItem(nama);

  contactForm.addEventListener("submit", (event) => {
    // Mencegah pengiriman otomatis sebelum seluruh validasi selesai.
    event.preventDefault();

    const namaInput = ambilInput("nama");
    const emailInput = ambilInput("email");
    const semesterInput = ambilInput("semester");
    const tanggalInput = ambilInput("tanggal");
    const prodiInput = ambilInput("prodi");
    const pesanInput = ambilInput("pesan");
    const jenisPesan = contactForm.querySelector(
      'input[name="jenis_pesan"]:checked',
    );
    const topikDipilih = contactForm.querySelectorAll(
      'input[name="minat[]"]:checked',
    );

    const nama = namaInput.value.trim();
    const email = emailInput.value.trim();
    const semester = Number(semesterInput.value);
    const tanggal = tanggalInput.value;
    const prodi = prodiInput.value;
    const pesan = pesanInput.value.trim();

    const tampilkanKesalahan = (pesanKesalahan) => {
      if (formFeedback) {
        formFeedback.textContent = pesanKesalahan;
        formFeedback.className = "form-feedback-error";
      }
    };

    if (formFeedback) {
      formFeedback.textContent = "";
      formFeedback.className = "form-feedback";
    }

    if (nama.length < 3 || nama.length > 50) {
      tampilkanKesalahan("Nama lengkap harus diisi 3 sampai 50 karakter.");
      return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      tampilkanKesalahan("Masukkan alamat email yang valid.");
      return;
    }

    if (
      semesterInput.value.trim() === "" ||
      !Number.isInteger(semester) ||
      semester < 1 ||
      semester > 14
    ) {
      tampilkanKesalahan("Semester harus diisi dengan angka 1 sampai 14.");
      return;
    }

    if (tanggal === "") {
      tampilkanKesalahan("Tanggal kunjungan harus diisi.");
      return;
    }

    if (!jenisPesan) {
      tampilkanKesalahan("Pilih jenis pesan.");
      return;
    }

    if (topikDipilih.length === 0) {
      tampilkanKesalahan("Pilih minimal satu topik yang diminati.");
      return;
    }

    if (prodi === "") {
      tampilkanKesalahan("Pilih program studi.");
      return;
    }

    if (pesan.length === 0 || pesan.length > 300) {
      tampilkanKesalahan("Pesan harus diisi dan maksimal 300 karakter.");
      return;
    }

    // Mengirim formulir setelah seluruh validasi JavaScript berhasil.
    // HTMLFormElement.submit() tidak memicu event submit kembali.
    contactForm.submit();
  });

  contactForm.addEventListener("reset", () => {
    if (formFeedback) {
      formFeedback.textContent = "";
      formFeedback.className = "form-feedback";
    }
  });

  contactForm.addEventListener("input", () => {
    if (formFeedback) {
      formFeedback.textContent = "";
      formFeedback.className = "form-feedback";
    }
  });
});

// Validasi formulir Rencana Kegiatan Mahasiswa (UTS).
const rencanaForms = document.querySelectorAll(
  'form[data-validation="rencana"]',
);

rencanaForms.forEach((rencanaForm) => {
  const feedback = rencanaForm.querySelector("[data-form-feedback]");
  const penghitung = rencanaForm.querySelector("[data-char-count]");
  const ambil = (nama) => rencanaForm.elements.namedItem(nama);
  const deskripsiInput = ambil("deskripsi_kegiatan");

  const bersihkanFeedback = () => {
    if (feedback) {
      feedback.textContent = "";
      feedback.className = "form-feedback";
    }
  };

  const perbaruiHitung = () => {
    if (penghitung) {
      penghitung.textContent = deskripsiInput.value.length + "/300";
    }
  };
  perbaruiHitung();
  deskripsiInput.addEventListener("input", perbaruiHitung);

  rencanaForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const nama = ambil("nama_kegiatan").value.trim();
    const kategori = ambil("kategori_kegiatan").value;
    const tanggal = ambil("tanggal_kegiatan").value;
    const lokasi = ambil("lokasi_kegiatan").value.trim();
    const deskripsi = deskripsiInput.value.trim();

    // Tanggal lokal hari ini (format YYYY-MM-DD).
    const hariIni = new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
      .toISOString()
      .slice(0, 10);

    const tampilkanKesalahan = (pesanKesalahan) => {
      if (feedback) {
        feedback.textContent = pesanKesalahan;
        feedback.className = "form-feedback-error";
      }
    };

    bersihkanFeedback();

    if (nama.length < 3 || nama.length > 100) {
      tampilkanKesalahan("Nama kegiatan harus diisi 3 sampai 100 karakter.");
      return;
    }
    if (kategori === "") {
      tampilkanKesalahan("Pilih kategori kegiatan.");
      return;
    }
    if (tanggal === "") {
      tampilkanKesalahan("Tanggal pelaksanaan harus diisi.");
      return;
    }
    if (tanggal < hariIni) {
      tampilkanKesalahan("Tanggal pelaksanaan tidak boleh di masa lalu.");
      return;
    }
    if (lokasi.length < 3 || lokasi.length > 100) {
      tampilkanKesalahan("Lokasi kegiatan harus diisi 3 sampai 100 karakter.");
      return;
    }
    if (deskripsi.length < 10 || deskripsi.length > 300) {
      tampilkanKesalahan("Deskripsi harus diisi 10 sampai 300 karakter.");
      return;
    }

    rencanaForm.submit();
  });

  rencanaForm.addEventListener("reset", () => {
    bersihkanFeedback();
    if (penghitung) penghitung.textContent = "0/300";
  });

  rencanaForm.addEventListener("input", bersihkanFeedback);
});