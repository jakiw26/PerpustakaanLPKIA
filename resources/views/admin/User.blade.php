<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">

            <a class="navbar-brand fw-bold" href="/admin">
                Perpustakaan LPKIA
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 gap-3">

                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="/User">Users</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Members</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Authors</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Publishers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/borrowings">
                            Borrowings
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/borrowingsdetails">
                            Borrowings Details
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/returns">Returns</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-header bg-primary text-white rounded-top-4 border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0 fw-bold"> Data User </h3> <button
                        class="btn btn-light text-primary fw-semibold rounded-pill px-4" data-bs-toggle="modal"
                        data-bs-target="#tambahBorrowingModal"> + Tambah Data </button>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($User as $User)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $User->name }}</td>
                                        <td>{{ $User->email }}</td>
                                        <td>{{ $User->role }}</td>
                                        <td>{{ $User->password }}</td>

                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $User->id }}">
                                                Edit
                                            </button>

                                            <form action="/User/delete/{{ $User->id }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                    Hapus
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
    <div class="modal fade" id="tambahBorrowingModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold">
                        Add User
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-4">
                    <form action="/User/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nama
                            </label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Email
                            </label>
                            <input type="text" name="email" class="form-control" placeholder="Masukkan Email"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Role
                            </label>
                            <input type="text" name="role" class="form-control" placeholder="Masukan Role" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Password
                            </label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Role" required>
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

    {{-- @foreach ($User as $User)
        <div class="modal fade" id="editModal{{ $User->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 rounded-4 shadow">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title fw-bold">
                            Edit User
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>

                    <div class="modal-body p-4">
                        <form action="/User/update/{{ $User->id }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Nama
                                </label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ $User->User_id }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Email
                                </label>
                                <input type="text" name="Email" class="form-control"
                                    value="{{ $User->kelas }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Role
                                </label>
                                <input type="text" name="role" class="form-control"
                                    value="{{ $User->kelas }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Role
                                </label>
                                <input type="text" name="password" class="form-control"
                                    value="{{ $User->kelas }}" required>
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
    @endforeach --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09cYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

</body>
</html>