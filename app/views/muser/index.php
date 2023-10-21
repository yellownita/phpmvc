<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
     <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navy-dsbrd1">
    <div class="container-fluid">
        <span class="navbar-brand fw-bold text-light navy-dsbrd2">Management User</span>
        <div class="d-flex align-items-center">
            <i class='bx bxs-bell bx-sm text-light'></i>
        </div>
    </div>
</nav>

<div class="container-fluid font">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar sidebar-dsbrd1">
            <div class="position-sticky">
                <div class="sidebar-logo text-center mt-3">
                    <img src="logo_gabungan.png" alt="Logo" class="img-fluid">
                </div>
                <ul class="sidebar-menu mt-5 sidebar-dsbrd2">
                    <li><i class='bx bxs-home text-light'></i>
                        <a href="<?= BASEURL; ?>/muser/dashboard">Beranda</a></li>
                    <br></br>
                    <li><i class='bx bxs-home text-light'></i>
                        <a href="<?= BASEURL; ?>/muser">Pengguna</a></li>
                    <br></br>
                    <li><i class='bx bx-file text-light'></i>
                        <a href="<?= BASEURL; ?>/muser/perusahaan">Perusahaan</a></li>
                    <br></br>
                    <li><i class='bx bx-buildings text-light'></i>
                        <a href="<?= BASEURL; ?>/muser/admin">Admin</a></li>
                </ul>
            </div>
        </nav>
            
<?php
// Set sesi 'role' sesuai dengan peran pengguna saat login
$_SESSION['role'] = 'admin'; // atau 'user' sesuai dengan peran pengguna
?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- new end -->
    <div class="container mt-3">
    <div class="row">
    <div class="col-log-6">
        <?php Flasher::flash(); ?>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- <h3>Management User</h3> -->
           
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahdata" data-bs-toggle="modal" data-bs-target="#formModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"></path></svg>
        Tambah User
            </button>
    <!-- new -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <table class="table table-hover">
            
            <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>jenis_kelamin</th>
                <th>tgl lahir</th>
                <th>email</th>
                <th>telepon </th>
                <th>alamat</th>
                <th>file</th>
                <th>edit</th>
                <th>hapus</th>
            </tr>
            <?php foreach( $data['msr'] as $msr ): ?>
            <tr>
                <td><?= $msr['username']; ?></td>
                <td><?= $msr['nama']; ?></td>
                <td><?= $msr['jenis_kelamin']; ?></td>
                <td><?= $msr['tanggal_lahir']; ?></td>
                <td><?= $msr['email']; ?></td>
                <td><?= $msr['telepon']; ?></td>
                <td><?= $msr['alamat']; ?></td>
                <td><?= $msr['CV']; ?></td>
                <td><a href="<?= BASEURL; ?>/muser/ubah/<?= $msr['id'];?>" class="badge bg-success tampilModalUbah float-right ml-1" data-bs-toggle="modal" data-bs-target="#formModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path><path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg></a></td>
                <td><a href="<?= BASEURL; ?>/muser/hapus/<?= $msr['id'];?>" class="badge bg-danger float-right ml-1" onclick="return confirm('yyakin dek?');"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a></td>
            </tr>
            <?php endforeach; ?>
            </table>
            </main>
        </div>
    </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="formModalLabel">Tambah Data </h5>
            <button type="button" class="close tombolTambahData" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
            <form action="<?= BASEURL; ?>/muser/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group ">
                <label for="username">username</label>
                <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
            </div>
            
            <div class="form-group">
                <label for="nama_depan">nama_depan</label>
                <input type="text" class="form-control" id="nama_depan" name="nama_depan" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="nama_belakang">nama_belakang</label>
                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">jenis_kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">tanggal_lahir</label>
                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" autocomplete="off">
            </div>

            
            <div class="form-group">
                <label for="telepon">telepon</label>
                <input type="number" class="form-control" id="telepon" name="telepon" >
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" >
            </div>
            <div class="form-group">
                <label for="file">File</label>
                <input type="text" class="form-control" id="file" name="file" >
            </div>
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    </main>
    </body>
</main>