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
                            <a href="<?= BASEURL; ?>/perusahaan">Beranda</a></li>
                        <br></br>
                        <li><i class='bx bx-file text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan/loker">Loker</a></li>
                        <br></br>
                        <li><i class='bx bx-buildings text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan/page">Perusahaan</a></li>
                            
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Konten Utama -->
                <div class="card mt-4">
                    <div class="card-header text-center fw-bold text-light card-lkr-tmb">
                        Tambah Lowongan Pekerjaan
                    </div>
                    <div class="card-body">
                        
                        <form action="" method="post">
                            <div class="row mb-3">
                                <label for="posisi" class="col-sm-2 col-form-label">ID LOKER</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="id" placeholder="Masukkan ID Pekerjaan" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="posisi" class="col-sm-2 col-form-label">Posisi Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="posisi" placeholder="Masukkan posisi pekerjaan" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi pekerjaan" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="posisi" class="col-sm-2 col-form-label">Syarat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="syarat" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lokasi" placeholder="Masukkan lokasi pekerjaan" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Gaji</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="gaji" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">TAMBAH</button>
                        </form>
                    </div>
                </div>

            </main>
        </div>
    </div>