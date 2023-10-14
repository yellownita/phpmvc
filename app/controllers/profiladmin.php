<?php
class profiladmin extends Controller {
    public function index()
    {
        $data['judul'] = 'Profile Admin';
        $data['pad'] = $this->model('pad_model')->getAllpad();
        $this->view('tamplates/header', $data);
        $this->view('foradmin/index' , $data);
        $this->view('tamplates/footer'); 
    }
   
}

   
    
