<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Borrowings Detail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="/admin">
                <img src="https://e-sertifikat.lpkia.ac.id/img/logo_IDE_transparan.png" alt="Logo LPKIA" width="45"
                    height="45" class="me-2 rounded-circle shadow-sm">
                Perpustakaan LPKIA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav gap-2">

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/user') ? 'active fw-bold' : '' }}" href="/admin/user">Users</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/members') ? 'active fw-bold' : '' }}" href="/admin/members">Members</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/books') ? 'active fw-bold' : '' }}" href="/admin/books">Books</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/categories') ? 'active fw-bold' : '' }}" href="/admin/categories">Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/authors') ? 'active fw-bold' : '' }}" href="/admin/authors">Authors</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/publishers') ? 'active fw-bold' : '' }}" href="/admin/publishers">Publishers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/borrowings') ? 'active fw-bold' : '' }}" href="/admin/borrowings">Borrowings</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/borrowingsdetails') ? 'active fw-bold' : '' }}" href="/admin/borrowingsdetails">Borrowings Details</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/returns') ? 'active fw-bold' : '' }}" href="/admin/returns">Returns</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-header bg-primary text-white rounded-top-4 border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0 fw-bold"> Data Returns </h3> <button
                        class="btn btn-light text-primary fw-semibold rounded-pill px-4" data-bs-toggle="modal"
                        data-bs-target="#tambahReturnsModal"> + Tambah Data </button>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>Borrowing_id</th>
                                <th>Return Date</th>
                                <th>Late Days</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($returns as $return)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $return->borrowing_id }}</td>
                                        <td>{{ $return->return_date }}</td>
                                        <td>{{ $return->late_days }}</td>

                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $return->id }}">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </button>

                                            <form action="/returns/delete/{{ $return->id }}" method="POST"
                                                class="d-inline delete-form">
                                                @csrf
                                                @method('DELETE')

                                                <button type="button" class="btn btn-danger btn-sm btn-delete">
                                                    <i class="bi bi-trash3"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahReturnsModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold">
                        Add Returns
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-4">
                    <form action="/returns/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Borrowing ID
                            </label>
                            <input type="number" name="borrowing_id" class="form-control"
                                placeholder="Masukkan Borrowing ID" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Return Date
                            </label>
                            <input type="date" name="return_date" class="form-control"
                                placeholder="Masukkan return date" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Late Days
                            </label>
                            <input type="int" name="late_days" class="form-control" required>
                        </div>

                        <div class="text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($returns as $return)
        <div class="modal fade" id="editModal{{ $return->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 rounded-4 shadow">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title fw-bold">
                            Edit Returns
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>

                    <div class="modal-body p-4">
                        <form action="/returns/update/{{ $return->id }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Borrowing ID
                                </label>
                                <input type="number" name="borrowing_id" class="form-control"
                                    value="{{ $return->borrowing_id }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Return Date
                                </label>
                                <input type="date" name="return_date" class="form-control"
                                    value="{{ $return->return_date }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Late Days
                                </label>
                                <input type="int" name="late_days" class="form-control"
                                    value="{{ $return->late_days }}" required>
                            </div>

                            <div class="text-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Batal
                                </button>
                                <button type="submit" class="btn btn-warning">
                                    Update
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09cYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "{{ session('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif

    <script>
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function() {
                let form = this.closest('form');

                Swal.fire({
                    title: "Yakin mau hapus?",
                    text: "Data tidak bisa dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
</body>

</html>
