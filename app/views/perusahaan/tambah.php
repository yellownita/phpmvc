<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navy-lkr1">
        <div class="container-fluid">
            <span class="navbar-brand fw-bold text-light navy-lkr2">CRUD LOKER</span>
            <div class="d-flex align-items-center">
                <i class='bx bxs-bell bx-sm text-light'></i>
            </div>
        </div>
    </nav>

    <div class="container-fluid font">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar sidebar-lkr">
                <div class="position-sticky">
                    <div class="sidebar-logo text-center mt-3">
                        <img src="logo_gabungan.png" alt="Logo" class="img-fluid">
                    </div>
                    <ul class="sidebar-menu mt-5 sidebar-lkr2">
                        <li style="list-style: none;"><i class='bx bxs-home text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan">Beranda</a></li>
                        <br></br>
                        <li style="list-style: none;"><i class='bx bx-file text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan/loker">Loker</a></li>
                        <br></br>
                        <li style="list-style: none;"><i class='bx bx-buildings text-light'></i>
                            <a href="<?= BASEURL; ?>/perusahaan/page">Perusahaan</a></li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Konten Utama -->
                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="card mt-4">
                    <div class="card-header text-center fw-bold text-light card-lkr-tmb">
                        Tambah Lowongan Pekerjaan
                    </div>
                    <div class="card-body">
                        
                        <form action="<?= BASEURL; ?>/perusahaan/tambah" method="post">
                           
                            <div class="row mb-3">
                                <label for="posisi" class="col-sm-2 col-form-label">Posisi Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="posisi" name="posisi_loker" placeholder="Masukkan posisi pekerjaan" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="deskripsi" name="deskripsi_loker" rows="3" placeholder="Masukkan deskripsi pekerjaan" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="posisi" class="col-sm-2 col-form-label">Syarat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="syarat_loker" id="syarat" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukkan lokasi pekerjaan" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Gaji</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="gaji" id="gaji" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal_posting" id="tanggal" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">TAMBAH</button>
                        </form>
                    </div>
                </div>

            </main>
        </div>
        </div>
        </div>
    </div>
    </div>