<?php

class About extends Controller{
    
    public function index($nama = 'Yellow', $pekerjaan = 'siswi', $umur = 17){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('tamplates/header', $data);
       $this->view('about/index', $data);
       $this->view('tamplates/footer', $data);

    }
    public function page()
    {
        $data['judul'] = 'Pages About';
        $this->view('tamplates/header', $data);
        $this->view('about/page' , $data);
        $this->view('tamplates/footer', $data);

    }
}