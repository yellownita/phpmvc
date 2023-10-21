<?php

class Perusahaan extends Controller{
    
    
    public function index() {
        $data['judul'] = 'Perusahaan Loker';
    
    
        $data['prs'] = $this->model('perusahaan_model')->getAllloker();
        $this->view('perusahaan/index', $data);
        $this->view('tamplates/footer', $data);

        // $dataModel = new perusahaan_model();
        // $recordCount = $dataModel->getRecordCount();

        // $data['recordCount'] = $recordCount; // Data yang akan dikirim ke view

        $this->view('perusahaan/index', $data); //

        $dataModel = new perusahaan_model();
        $recordCount = $dataModel->getRecordCount();

        $data['recordCount'] = $recordCount; // Data yang akan dikirim ke view

        // $this->view('your_view', $data);
    }
    
    
    public function page()
    {
        $data['judul'] = 'Perusahaan About';
        $data['prs'] = $this->model('perusahaan_model')->getAllloker();
        // $this->view('tamplates/header', $data);
        $this->view('perusahaan/page' , $data);
        $this->view('tamplates/footer', $data);

    }

   
    public function loker()
    {
        $data['judul'] = 'Perusahaan Loker';
        $data['prs'] = $this->model('perusahaan_model')->getAllloker();
        // $this->view('tamplates/header', $data);
        $this->view('perusahaan/loker' , $data);
        $this->view('tamplates/footer', $data);

    }
    public function tambah()
    {
         $data['judul'] = 'Tambah Loker';
        $data['prs'] = $this->model('perusahaan_model')->getAllloker();
        // $this->view('tamplates/header', $data);
        $this->view('perusahaan/tambah' , $data);
        $this->view('tamplates/footer', $data);

    }
    // public function tambahdata(){
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         // Menyimpan data loker ke database menggunakan model
    //         $lokerData = [
    //             'posisi_loker' => $_POST['posisi_loker'],
    //             'deskripsi_loker' => $_POST['deskripsi_loker'],
    //             'syarat_loker' => $_POST['syarat_loker'],
    //             'lokasi' => $_POST['lokasi'],
    //             'gaji' => $_POST['gaji'],
    //             'tanggal_posting' => $_POST['tanggal_posting']
    //             // tambahkan data lain yang diperlukan
    //         ];
    //         $this->model('perusahaan_model')->tambahDataloker($lokerData);
            
    //         // Mengarahkan kembali ke halaman daftar loker
    //         header('Location: ' . BASEURL . '/perusahaan/index');
    //     } else {
    //         // Menampilkan formulir tambah data loker
    //         $this->view('perusahaan/tambah');
    //     }
    // }
    public function tambahDataloker(){
        
        // $data['judul'] = 'Tambah Loker';
        // $data['prs'] = $this->model('perusahaan_model')->getAllloker();
        // // $this->view('tamplates/header', $data);
        // $this->view('perusahaan/tambah' , $data);
        // $this->view('tamplates/footer', $data);
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     // Menyimpan data loker ke database menggunakan model
        //     $lokerData = [
        //         'posisi_loker' => $_POST['posisi_loker'],
        //         'deskripsi_loker' => $_POST['deskripsi_loker'],
        //         'syarat_loker' => $_POST['syarat_loker'],
        //         'lokasi' => $_POST['lokasi'],
        //         'gaji' => $_POST['gaji'],
        //         'tanggal_posting' => $_POST['tanggal_posting']
        //         // tambahkan data lain yang diperlukan
        //     ];
        //     $this->model('perusahaan_model')->tambahDataloker($lokerData);
            
        //     // Mengarahkan kembali ke halaman daftar loker atau halaman lain yang sesuai
        //     header('Location: ' . BASEURL . '/perusahaan/index');
        // } else {
        //     // Menampilkan formulir tambah data loker
        //     $this->view('perusahaan/tambah');
        // }

       
            if( $this->model('perusahaan_model')->tambahDataloker($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/perusahaan');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/perusahaan');
                exit;
            }
        
    }
    
}