<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Perpustakaan LPKIA</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #f8fafc;
            overflow-x: hidden;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .nav-link {
            position: relative;
            transition: 0.3s;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            width: 0%;
            height: 2px;
            background: #0d6efd;
            left: 0;
            bottom: -2px;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;

            background-image: url("https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=1200&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            color: white;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            top: -100px;
            right: -100px;
        }

        .hero .overlay {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.75);
        }

        .hero .container {
            position: relative;
            z-index: 2;
        }

        .btn-custom {
            background: #facc15;
            color: #111827;
            font-weight: 600;
            border-radius: 12px;
            padding: 12px 24px;
            transition: 0.3s;
            border: none;
        }

        .btn-custom:hover {
            background: #eab308;
            transform: translateY(-2px);
        }

        .section-title {
            font-weight: 700;
            color: #0f172a;
        }

        .card {
            transition: 0.4s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12) !important;
        }

        #gallery img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 25px;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        #gallery img:hover {
            transform: scale(1.04);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        img {
            transition:
                transform 0.5s ease,
                box-shadow 0.5s ease;
        }

        img:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.18);
        }

        @media (max-width: 768px) {
            .hero {
                text-align: center;
                padding: 120px 20px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            #gallery img {
                height: 220px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!-- Logo + Brand -->
            <a class="navbar-brand d-flex align-items-center fw-bold text-primary" href="#">
                <!-- Logo -->
                <img src="https://e-sertifikat.lpkia.ac.id/img/logo_IDE_transparan.png" alt="Logo LPKIA" width="45"
                    height="45" class="me-2 rounded-circle shadow-sm" />

                Perpustakaan LPKIA
            </a>

            <!-- Button Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang"> Tentang </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#layanan"> Layanan </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#gallery"> Gallery </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#kontak"> Kontak </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="overlay"></div>

        <div class="container position-relative">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="zoom-in">
                    <h1 class="display-3 fw-bold mb-4">
                        Selamat Datang di <br />
                        Perpustakaan LPKIA
                    </h1>

                    <p class="lead mb-4">
                        Tempat terbaik untuk belajar, membaca, dan mengembangkan wawasan
                        dengan ribuan koleksi buku modern dan fasilitas nyaman.
                    </p>

                    <a href="/admin" class="btn btn-custom">
                        Jelajahi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang -->
    <section class="py-5" id="tentang">
        <div class="container">
            <div class="card border-0 shadow-lg rounded-5 overflow-hidden" data-aos="fade-up">
                <div class="row g-0 align-items-center">
                    <!-- Gambar -->
                    <div class="col-lg-6">
                        <div class="p-4">
                            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1200&auto=format&fit=crop"
                                class="img-fluid rounded-5 shadow" alt="Tentang"
                                style="height: 500px; width: 100%; object-fit: cover" />
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="section-title mb-4">Tentang Kami</h2>

                            <p class="text-secondary fs-5">
                                Perpustakaan kampus menyediakan berbagai koleksi buku
                                akademik, jurnal, e-book, dan ruang belajar yang nyaman.
                            </p>

                            <p class="text-secondary fs-5">
                                Dengan teknologi modern dan sistem digital, mahasiswa dapat
                                mencari dan meminjam buku dengan mudah kapan saja.
                            </p>

                            <div class="row mt-4 g-3">
                                <div class="col-6">
                                    <div class="bg-light rounded-4 p-3 text-center">
                                        <h3 class="fw-bold text-primary mb-1">5K+</h3>
                                        <small>Koleksi Buku</small>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="bg-light rounded-4 p-3 text-center">
                                        <h3 class="fw-bold text-primary mb-1">1K+</h3>
                                        <small>Mahasiswa Aktif</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan -->
    <section class="py-4" id="layanan">
        <div class="container py-3">
            <div class="card border-0 shadow-lg rounded-5 overflow-hidden" data-aos="fade-up">
                <div class="text-center p-5 pb-0">
                    <h2 class="section-title">
                        Layanan Peminjaman & Pengembalian Buku
                    </h2>
                </div>

                <div class="row g-0">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="p-4">
                            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=1200&auto=format&fit=crop"
                                class="img-fluid rounded-5 shadow mb-4" alt="Peminjaman"
                                style="width: 100%; height: 280px; object-fit: cover" />

                            <div class="d-flex align-items-center mb-3">
                                <div class="display-6 me-3">📚</div>

                                <h3 class="fw-bold text-secondary mb-0">Peminjaman Buku</h3>
                            </div>

                            <p class="text-secondary fs-5">
                                Mahasiswa dapat melakukan peminjaman buku dengan mudah melalui
                                sistem digital perpustakaan.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="p-4">
                            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1200&auto=format&fit=crop"
                                class="img-fluid rounded-5 shadow mb-4" alt="Pengembalian"
                                style="width: 100%; height: 280px; object-fit: cover" />

                            <div class="d-flex align-items-center mb-3">
                                <div class="display-6 me-3">🔄</div>

                                <h3 class="fw-bold text-secondary mb-0">Pengembalian Buku</h3>
                            </div>

                            <p class="text-secondary fs-5">
                                Proses pengembalian buku dilakukan secara cepat dengan sistem
                                monitoring otomatis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="py-3" id="gallery">
        <div class="container py-3">
            <div class="card border-0 shadow-lg rounded-5 overflow-hidden" data-aos="fade-up">
                <div class="text-center p-5 pb-0">
                    <h2 class="section-title">Gallery Perpustakaan</h2>
                </div>

                <div class="p-4">
                    <div class="row g-4">
                        <!-- Foto 1 -->
                        <div class="col-md-4" data-aos="zoom-in">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1200&auto=format&fit=crop"
                                alt="Gallery 1" class="img-fluid rounded-5 shadow" />
                        </div>

                        <!-- Foto 2 -->
                        <div class="col-md-4" data-aos="zoom-in">
                            <img src="https://images.unsplash.com/photo-1526243741027-444d633d7365?q=80&w=1200&auto=format&fit=crop"
                                alt="Gallery 2" class="img-fluid rounded-5 shadow" />
                        </div>

                        <!-- Foto 3 -->
                        <div class="col-md-4" data-aos="zoom-in">
                            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=1200&auto=format&fit=crop"
                                alt="Gallery 3" class="img-fluid rounded-5 shadow" />
                        </div>

                        <!-- Foto 4 -->
                        <div class="col-md-4" data-aos="zoom-in">
                            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1200&auto=format&fit=crop"
                                alt="Gallery 4" class="img-fluid rounded-5 shadow" />
                        </div>

                        <!-- Foto 5 -->
                        <div class="col-md-4" data-aos="zoom-in">
                            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=1200&auto=format&fit=crop"
                                alt="Gallery 5" class="img-fluid rounded-5 shadow" />
                        </div>

                        <!-- Foto 6 -->
                        <div class="col-md-4" data-aos="zoom-in">
                            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=1200&auto=format&fit=crop"
                                alt="Gallery 6" class="img-fluid rounded-5 shadow" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section class="py-3" id="kontak">
        <div class="container py-5">
            <div class="card border-0 shadow-lg rounded-5 overflow-hidden" data-aos="fade-up">
                <div class="text-center p-5 pb-0">
                    <h2 class="section-title fw-bold">Kontak Perpustakaan</h2>

                    <p class="fs-5 text-dark">
                        Hubungi kami atau kunjungi perpustakaan kampus secara langsung
                    </p>
                </div>

                <div class="row g-0 mt-4">
                    <div class="col-lg-5 bg-white text-dark p-5 d-flex flex-column justify-content-center">
                        <h2 class="fw-bold mb-4 text-dark">Perpustakaan LPKIA</h2>

                        <!-- Alamat -->
                        <div class="d-flex align-items-start mb-4">
                            <div class="fs-2 me-3 text-dark">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>

                            <div>
                                <h5 class="fw-bold mb-1 text-dark">Alamat</h5>
                                <p class="mb-0 text-dark">
                                    Kampus IDE LPKIA <br />
                                    Jl. Soekarno Hatta No.456, Bandung
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-flex align-items-start mb-4">
                            <div class="fs-2 me-3 text-dark">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1 text-dark">Email</h5>
                                <p class="mb-0 text-dark">perpustakaan@lpkia.ac.id</p>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="d-flex align-items-start mb-4">
                            <div class="fs-2 me-3 text-dark">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1 text-dark">Telepon</h5>
                                <p class="mb-0 text-dark">0812-3456-7890</p>
                            </div>
                        </div>

                        <!-- Jam Operasional -->
                        <div class="d-flex align-items-start">
                            <div class="fs-2 me-3 text-dark">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1 text-dark">Jam Operasional</h5>

                                <p class="mb-0 text-dark">
                                    Senin - Jumat : 08.00 - 20.00 <br />
                                    Sabtu : 08.00 - 15.00
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Maps -->
                    <div class="col-lg-7">
                        <iframe src="https://www.google.com/maps?q=IDE+LPKIA+Bandung&output=embed" width="100%"
                            height="100%" style="border: 0; min-height: 550px" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3 class="fw-bold text-primary mb-3">Perpustakaan LPKIA</h3>
                    <p class="text-light">
                        Perpustakaan modern kampus yang menyediakan berbagai koleksi buku,
                        jurnal, dan fasilitas belajar nyaman untuk mahasiswa.
                    </p>
                </div>

                <!-- Menu -->
                <div class="col-lg-2">
                    <h5 class="fw-bold mb-3">Menu</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#tentang" class="text-decoration-none text-light">
                                Tentang
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="#layanan" class="text-decoration-none text-light">
                                Layanan
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="#gallery" class="text-decoration-none text-light">
                                Gallery
                            </a>
                        </li>

                        <li>
                            <a href="#kontak" class="text-decoration-none text-light">
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="col-lg-3">
                    <h5 class="fw-bold mb-3">Kontak</h5>
                    <p class="mb-2">📍 Bandung, Indonesia</p>
                    <p class="mb-2">📧 perpustakaan@lpkia.ac.id</p>
                    <p>📞 0812-3456-7890</p>
                </div>

                <!-- Sosial Media -->
                <div class="col-lg-3">
                    <h5 class="fw-bold mb-3">Follow Us</h5>
                    <div class="d-flex gap-3">

                        <a href="#" class="text-white fs-4">
                            <i class="bi bi-whatsapp"></i>
                        </a>

                        <a href="#" class="text-white fs-4">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" class="text-white fs-4">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" class="text-white fs-4">
                            <i class="bi bi-twitter-x"></i>
                        </a>

                        <a href="#" class="text-white fs-4">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-4" />
            <div class="text-center">
                <p class="mb-0 text-secondary">
                    © 2026 Perpustakaan LPKIA. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>

</html>
