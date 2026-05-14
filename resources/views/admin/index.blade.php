    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">
                    Perpustakaan LPKIA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 gap-3">

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/user">Users</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/members">Members</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/books">Books</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/categories">Categories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/authors">Authors</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/publishers">Publishers</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/borrowings">Borrowings</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/borrowingsdetails">Borrowings Details</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/returns">Returns</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <div class="container mt-4">

            <!-- Judul Dashboard -->
            <div class="mb-4">
                <h3 class="fw-bold">Dashboard Admin</h3>
                <p class="text-muted">Selamat datang di sistem Perpustakaan LPKIA</p>
            </div>

            <!-- Card Statistik -->
            <div class="row g-3">

                <div class="col-md-3">
                    <div class="card shadow-sm border-0 bg-primary text-white">
                        <div class="card-body">
                            <h5>Total Users</h5>
                            <h3>120</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-0 bg-success text-white">
                        <div class="card-body">
                            <h5>Members</h5>
                            <h3>85</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-0 bg-warning text-dark">
                        <div class="card-body">
                            <h5>Books</h5>
                            <h3>320</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-0 bg-danger text-white">
                        <div class="card-body">
                            <h5>Borrowings</h5>
                            <h3>45</h3>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Menu Cepat -->
            <div class="row mt-4 g-3">

                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Kelola Buku</h5>
                            <p class="text-muted">Tambah, edit, dan hapus data buku</p>
                            <a href="#" class="btn btn-primary btn-sm">Go</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Data Members</h5>
                            <p class="text-muted">Kelola anggota perpustakaan</p>
                            <a href="#" class="btn btn-success btn-sm">Go</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Peminjaman</h5>
                            <p class="text-muted">Lihat data peminjaman buku</p>
                            <a href="#" class="btn btn-warning btn-sm">Go</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
    </body>

    </html>
