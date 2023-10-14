<?php

class muser_model {
    private $db;
    private $table = 'pengguna'; // Ubah tabel menjadi 'siswa'

    public function __construct() {
        $this->db = new Database;
    }
    

public function getAllmuser(){
    $this->db->query('SELECT * FROM pengguna');
    return $this->db->resultSet();
}

    public function getmuserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db ->single();
    }
    public function tambahDatamuser($data) {
        if (isset($data['username']) && isset($data['nama']) && isset($data['nama_depan']) && isset($data['nama_belakang']) && isset($data['jenis_kelamin']) && isset($data['tanggal_lahir']) && isset($data['email']) && isset($data['telepon']) && isset($data['alamat']) && isset($data['CV'])) {
            $query = "INSERT INTO pengguna (username, nama, nama_depan, nama_belakang, jenis_kelamin, tanggal_lahir, email, telepon, alamat, CV) VALUES (:username, :nama, :nama_depan, :nama_belakang, :jenis_kelamin, :tanggal_lahir, :email, :telepon, :alamat, :CV)";
    
            $this->db->query($query);
    
            $this->db->bind('username', $data['username']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('nama_depan', $data['nama_depan']);
            $this->db->bind('nama_belakang', $data['nama_belakang']);
            $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
            $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('telepon', $data['telepon']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('CV', $data['CV']);
    
            $this->db->execute();
    
            return $this->db->rowCount();
        } else {
            // Handle the case where some keys are missing in the $data array
            // You can throw an exception, log an error, or return an error code, as needed.
        }
    }
    
    // public function ubahDatamuser($data) {
    //     $query = "UPDATE $this->table SET 
    //         username = :username,
    //         nama = :nama,
    //         email = :email,
    //         telepon = :telepon
    //     WHERE id = :id";
    
    //     $this->db->query($query);
    
    //     $this->db->bind('username', $data['username']);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('telepon', $data['telepon']);
    //     $this->db->bind('id', $data['id']);
    
    //     $this->db->execute();
    
    //     return $this->db->rowCount();
    // }
    
    public function hapusDatamuser($id)
    {
        $query = "DELETE FROM pengguna WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}

