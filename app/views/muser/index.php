<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <!-- <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css"> -->
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
// Set sesi 'role' sesuai dengan peran pengguna saat login
$_SESSION['role'] = 'admin'; // atau 'user' sesuai dengan peran pengguna
?>
<div class="container mt-3">
<div class="row">
  <div class="col-log-6">
    <?php Flasher::flash(); ?>
  </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <h3>Management User</h3>
        <div class="logout">
        <a href="<?= BASEURL; ?>/home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m2 12 5 4v-3h9v-2H7V8z"></path><path d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051 2.051 3.08 2.051 4.95-.729 3.628-2.051 4.95-3.08 2.051-4.95 2.051-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z"></path></svg></a>
        </div>
        <div class="notif">
          <a href="<?= BASEURL; ?>/muser/notif/<?= $msr['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm7-7.414V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v4.586l-1.707 1.707A.996.996 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.996.996 0 0 0-.293-.707L19 14.586z"></path></svg></a>
        </div>
        <div class="user">
        <a href="<?= BASEURL; ?>/muser/login/<?= $msr['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg></a>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary tombolTambahdata" data-bs-toggle="modal" data-bs-target="#formModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"></path></svg>
       Tambah User
        </button>
        <table class="table table-hover">
          
          <tr>
            <th>Username</th>
            <th>Nama</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>jenis_kelamin</th>
            <th>tgl lahir</th>
            <th>email</th>
            <th>telepon </th>
            <th>alamat</th>
            <th>cv</th>
            <th>edit</th>
            <th>hapus</th>
          </tr>
          <?php foreach( $data['msr'] as $msr ): ?>
          <tr>
            <td><?= $msr['username']; ?></td>
            <td><?= $msr['nama']; ?></td>
            <td><?= $msr['nama_depan']; ?></td>
            <td><?= $msr['nama_belakang']; ?></td>
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
          <div class="form-group">
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
            <label for="CV">CV</label>
            <input type="text" class="form-control" id="CV" name="CV" >
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

