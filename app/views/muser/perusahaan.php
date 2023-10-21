<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
     <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css">
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navy-dsbrd1">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-light navy-dsbrd2">Dashboard</span>
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


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                
                <div class="row align-items-center mt-5 fw-bold">
                    <div class="col-1">
                        <input type="checkbox" class="form-check-input">
                    </div>
                    <div class="col">
                        <p class="mb-0">Nama</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Deskripsi</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Alamat</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Telepon</p>
                    </div>
                    <div class="col-auto">
                        <i class='bx bxs-pencil bx-xs'></i>
                        <i class='bx bxs-trash bx-xs'></i>
                    </div>
                </div>
                <hr>
                <?php foreach( $data['prs'] as $prs ): ?>
                <div class="row align-items-center mt-5">
                    <div class="col-1">
                        <input type="checkbox" class="form-check-input">
                    </div>
                    <div class="col">
                        <p class="mb-0"><?= $prs['posisi_loker']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><?= $prs['deskripsi_loker']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><?= $prs['lokasi']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><?= $prs['tanggal_posting']; ?></p>
                    </div>
                    <div class="col">
                        <p class="mb-0"><a href="<?= BASEURL; ?>/muser/ubah/<?= $msr['id'];?>" class="badge bg-success tampilModalUbah float-right ml-1" data-bs-toggle="modal" data-bs-target="#formModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path><path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg></a> | <a href="<?= BASEURL; ?>/muser/hapus/<?= $msr['id'];?>" class="badge bg-danger float-right ml-1" onclick="return confirm('yyakin dek?');"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a> </p>
                    </div>
                    <div class="col-auto">
                        <i class='bx bxs-pencil bx-xs'></i>
                        <i class='bx bxs-trash bx-xs'></i>
                    </div>
                </div>
                <?php endforeach; ?>
                <hr>

            </main>
        </div>
    </div>