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
            <div class="row align-items-center mt-4">
                <!-- Konten Utama -->
                <!-- <div class="row align-items-center mt-5 fw-bold"> -->
                <!-- <table class="table table-hover"> -->
                <table class="table table-hover">
            <tr>
                <th>posisi_loker</th>
                <th>deskripsi_loker</th>
                <th>lokasi</th>
                <th>syarat_loker</th>
                <th>gaji</th>
                <th>tanggal_posting </th>
                <th>edit</th>
                <th>hapus</th>
            </tr>
                    
                </div>
                
                <?php foreach( $data['prs'] as $prs ): ?>
                    <tr>
                <td><?= $prs['posisi_loker']; ?></td>
                <td><?= $prs['deskripsi_loker']; ?></td>
                <td><?= $prs['lokasi']; ?></td>
                <td><?= $prs['syarat_loker']; ?></td>
                <td><?= $prs['gaji']; ?></td>
                <td><?= $prs['tanggal_posting']; ?></td>
                <td><a href="" class="badge bg-success tampilModalUbah float-right ml-1" data-bs-toggle="modal" data-bs-target="#formModal1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path><path d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z"></path></svg></a></td>
                <td><a href="" class="badge bg-danger float-right ml-1" onclick="return confirm('apakah anda yakin untuk menghapus?');"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a></td>
            </tr>
            <?php endforeach; ?>
            </table>
               
            <div class="position-relative fs-1 btnTambahLoker"><button type="button" class="btnTambahLoker" data-bs-toggle="modal" data-bs-target="#formModal1"><i class='bx bxs-plus-square position-absolute bottom-0 end-0'></div></button>

            </main>
        </div>
    </div>
    
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Konten Utama -->
    <div class="modal fade" id="formModal1" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="card mt-4">
                    <div class="card-header text-center fw-bold text-light card-lkr-tmb">
                        Tambah Lowongan Pekerjaan
                    </div>
                    <div class="card-body">
                        
                        <form action="" method="post">
                           
                        <div class="row mb-3">
                    <label for="id_perusahaan" class="col-sm-2 col-form-label">Pilih Perusahaan</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="id_perusahaan" name="id_perusahaan" required>
                            <option value="">Pilih Perusahaan</option> <!-- Opsi default -->
                            <?php foreach ($data['perusahaanOptions'] as $perusahaanOption): ?>
                                <option value="<?= $perusahaanOption['id_perusahaan']; ?>">
                                    <?= $perusahaanOption['nama_perusahaan']; ?> <!-- Tampilkan nama perusahaan atau informasi relevan -->
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                            <div class="row mb-3">
                                <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
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
    <!-- Bootstrap JS (optional) -->
    
</body>

</html>