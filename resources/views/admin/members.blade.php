<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members</title>

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
                        <a class="nav-link " href="/User">Users</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="/members">Members</a>
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
                                <th>Nim</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->nim }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->phone }}</td>
                                        <td>{{ $member->address }}</td>

                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $member->id }}">
                                                Edit
                                            </button>

                                            <form action="/members/delete/{{ $member->id }}" method="POST"
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
                    <form action="/members/store" method="POST">
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
                                Nim
                            </label>
                            <input type="number" name="nim" class="form-control" placeholder="Masukkan Nama"
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
                                Phone
                            </label>
                            <input type="number" name="phone" class="form-control" placeholder="Masukan Phone" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Address
                            </label>
                            <input type="text" name="address" class="form-control" placeholder="Masukan Address" required>
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

    @foreach ($members as $member)
        <div class="modal fade" id="editModal{{ $member->id }}" tabindex="-1">
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
                        <form action="/member/update/{{ $member->id }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Nama
                                </label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ $member->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Nim
                                </label>
                                <input type="number" name="nim" class="form-control"
                                    value="{{ $member->nim }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Email
                                </label>
                                <input type="text" name="email" class="form-control"
                                    value="{{ $member->email }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Phone
                                </label>
                                <input type="number" name="phone" class="form-control"
                                    value="{{ $member->phone }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Address
                                </label>
                                <input type="text" name="address" class="form-control"
                                    value="{{ $member->address }}" required>
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

</body>

</html>

</body>
</html>