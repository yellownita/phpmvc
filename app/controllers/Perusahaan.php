<?php

class Perusahaan extends Controller{
    
    public function index(){
       
        $data['judul'] = 'Perusahaan Loker';
        $data['prs'] = $this->model('perusahaan_model')->getAllloker();
        // $data['judul'] = 'Perusahaan Me';
        // $this->view('tamplates/header', $data);
       $this->view('perusahaan/index', $data);
       $this->view('tamplates/footer', $data);

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