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
                <div class="card kartu-profil-prs1 mt-4">
                    <div class="kartu-profil-prs mt-4" >
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="kartu-body kartu-profil1">
                                    <li><i class='bx bx-buildings fw-bold fs-5'>
                                        YG ENTERTAINTMENT</i></li>
                                    <h5>Entertaintment Company</h5>
                                    <h6>PT YG Plus</h6>
                                    <br>
                                    <li></i><i class='bx bxs-map'></i>Seoul, South Korea</li>
                                    <li></i><i class='bx bxs-phone'></i>+82-xxxx-xxx</li>
                                    
                                </div>
                            </div>
                            <div class="company-img col-md-4 prf-img">
                                <img src="yg-entertaintment.jpeg" alt="yg-entertaintment">
                            </div>
                        </div>
                    </div>
               
            
                <div class="description mt-2">
                    <h4>Deskripsi Perusahaan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel lorem vitae libero aliquet
                        tincidunt. Phasellus sodales, sapien eu commodo lacinia, lorem nisl aliquet dui, sit amet laoreet
                        purus elit nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel lorem vitae libero aliquet
                        tincidunt. Phasellus sodales, sapien eu commodo lacinia, lorem nisl aliquet dui, sit amet laoreet
                        purus elit nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel lorem vitae libero aliquet
                        tincidunt. Phasellus sodales, sapien eu commodo lacinia, lorem nisl aliquet dui, sit amet laoreet
                        purus elit nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel lorem vitae libero aliquet
                        tincidunt. Phasellus sodales, sapien eu commodo lacinia, lorem nisl aliquet dui, sit amet laoreet
                        purus elit nec diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel lorem vitae libero aliquet
                        tincidunt. Phasellus sodales, sapien eu commodo lacinia, lorem nisl aliquet dui, sit amet laoreet
                        purus elit nec diam. </p>
                </div>
                </div>

            </main>
        </div>
    </div>