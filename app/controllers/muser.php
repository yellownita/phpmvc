<?php
class muser extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar user';
        $data['msr'] = $this->model('muser_model')->getAllmuser();
        $this->view('tamplates/header', $data);
        $this->view('muser/index' , $data);
        $this->view('tamplates/footer'); 
    }
    public function detail($id)
    {
        $data['judul'] = 'Daftar User';
        $data['msr'] = $this->model('muser_model')->getmuserById($id);
        $this->view('tamplates/header', $data);
        $this->view('muser/detail' , $data);
        $this->view('tamplates/footer'); 
    }
    public function tambah()
    {
        if( $this->model('muser_model')->tambahDatamuser($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/muser');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/muser');
            exit;
        }
    }
    
    public function ubah()
    {
        if( $this->model('muser_model')->ubahDatamuser($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/muser');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/muser');
            exit;
        } 
    }
    public function hapus($id)
    {
        if( $this->model('muser_model')->hapusDatamuser($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/muser');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/muser');
            exit;
        }
    }


    
}
