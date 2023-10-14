<?php


class AdminModel {
    private $db;
    private $table = 'admin';

    public function __construct($db) {
        $this->db = $db;
    }

    // Metode untuk autentikasi admin, dll.
}

class UserModel {
    private $db;
    private $table = 'pengguna';

    public function __construct($db) {
        $this->db = $db;
    }

    // Metode untuk autentikasi pengguna, dll.
}

class PerusahaanModel {
    private $db;
    private $table = 'perusahaan';

    public function __construct($db) {
        $this->db = $db;
    }

    // Metode untuk autentikasi perusahaan, dll.
}
class login_model {
    private $db;

    public function index() {
    $data['judul'] = 'login_model';

    // Inisialisasi objek Database
    $db = new Database;

    // Inisialisasi objek login_model dan kirimkan objek database
    $loginModel = $this->model('login_model', $db);


    $data['judul'] = 'login_model';

    // Inisialisasi objek Database
    $database = new Database();

    // Inisialisasi objek login_model dengan objek Database yang sudah diinisialisasi
    $loginModel = new login_model($database);

    // ...

    $data['judul'] = 'login_model';
    $this->view('tamplates/header', $data);
    $this->view('login/index', $data);
    $this->view('tamplates/footer');

    // ...
}

  
    public function __construct() {
        require_once '../app/core/Database.php';
        $this->db = new Database;
    }
    

    // public function authenticate($username, $password, $role) {
    //     try {
    //         // Tentukan tabel yang akan digunakan berdasarkan peran (role)
    //         $table = 'admin';
    //         switch ($role) {
    //             case 'admin':
    //                 $table = 'admin';
    //                 break;
    //             case 'perusahaan':
    //                 $table = 'perusahaan';
    //                 break;
    //             case 'pengguna':
    //                 $table = 'pengguna';
    //                 break;
    //             default:
    //                 return null; // Peran tidak valid
    //         }

    //         // Lakukan kueri SQL untuk mencari pengguna berdasarkan username dan password di tabel yang sesuai
    //         $query = "SELECT * FROM $table WHERE username = :username AND password = :password";
    //         $stmt = $this->db->prepare($query);
    //         $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    //         $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    //         $stmt->execute();
            
    //         // Ambil hasil kueri
    //         $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //         if ($user) {
    //             // Jika pengguna ditemukan, kembalikan data pengguna
    //             return $user;
    //         } else {
    //             // Jika tidak ditemukan, kembalikan null atau pesan kesalahan
    //             return null;
    //         }
    //     } catch (PDOException $e) {
    //         // Tangani kesalahan koneksi atau kueri SQL
    //         echo "Error: " . $e->getMessage();
    //         return null;
    //     }
    // }

    public function authenticate($username, $password, $role) {
        try {
            // Tentukan tabel yang akan digunakan berdasarkan peran (role)
            $table = '';
            switch ($role) {
                case 'admin':
                    $table = 'admin';
                    break;
                case 'perusahaan':
                    $table = 'perusahaan';
                    break;
                case 'pengguna':
                    $table = 'pengguna';
                    break;
                default:
                    return null; // Peran tidak valid
            }
    
            // Lakukan kueri SQL untuk mencari pengguna berdasarkan username dan password di tabel yang sesuai
            $query = "SELECT * FROM $table WHERE username = :username AND password = :password";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
    
            // Ambil hasil kueri
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                // Jika pengguna ditemukan, kembalikan data pengguna
                return $user;
            } else {
                // Jika tidak ditemukan, kembalikan null atau pesan kesalahan
                return null;
            }
        } catch (PDOException $e) {
            // Tangani kesalahan koneksi atau kueri SQL
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
    
}

