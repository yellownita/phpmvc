<?php
class Logout extends Controller {
    public function logout(){
        $data['judul'] = 'Logout';
        $data['msr'] = $this->model('Logout_model')->getUser();
        $this->view('tamplates/header', $data);
        $this->view('muser/logout', $data);
       $this->view('tamplates/footer' , $data);  
       
    }
}