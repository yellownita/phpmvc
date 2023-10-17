<?php
class Login extends Controller {
    public function index() {
        
        $data['judul'] = 'login model';
        $loginModel = $this->model('login_model'); 
        $database = new Database();
        $loginModel = new login_model($database);
// Memanggil konstruktor login_model
        // $this->view('tamplates/header', $data);
        $this->view('login/index' , $data);
        $this->view('tamplates/footer');
        

        $error = ''; // Inisialisasi variabel pesan kesalahan

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            // Instantiate LoginModel
            $loginModel = $this->model('login_model'); // Anda harus memiliki metode model yang sesuai dalam Controller Anda
             
       
           // Authenticate user dengan memberikan tiga argumen yang diperlukan
            $user = $loginModel->authenticate($username, $password, $role);

            if ($user) {
                // Login berhasil, lanjutkan dengan tindakan selanjutnya
                // Misalnya, simpan informasi pengguna dalam sesi
                $_SESSION['user'] = $user;

                // Redirect ke halaman yang sesuai
                switch ($role) {
                    case 'admin':
                        header('Location: ' . BASEURL . '/muser');
                        // header('Location: ' . BASEURL . '/siswa');
                        break;
                    case 'perusahaan':
                        header('Location: ' . BASEURL . '/perusahaan');
                        break;
                    case 'pengguna':
                        header('Location: ' . BASEURL . '/pengguna');
                        break;
                    default:
                        // Role tidak valid, tindakan sesuai kebijakan aplikasi
                        break;
                }
                exit; // Pastikan untuk keluar setelah melakukan redirect
            } else {
                // Login gagal, atur pesan kesalahan
                $error = 'Username atau password salah. Silakan coba lagi.';
            }
        }

        // Tampilkan halaman login dengan pesan kesalahan (jika ada)
        // Anda harus memiliki metode view yang sesuai dalam Controller Anda
        $this->view('/login/index', ['error' => $error]);
    }
}

   
    
