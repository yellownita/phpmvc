<?php
class perusahaan_model{
    private $db;
    private $table = 'loker'; // Ubah tabel menjadi 'siswa'

    public function __construct() {
        $this->db = new Database;
    }
    public function getAllloker(){
        $this->db->query('SELECT * FROM loker');
        return $this->db->resultSet();
    }
    public function getlokerById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db ->single();
    }

    public function tambahDataloker($data) {
        if (isset($data['id_perusahaan']) && isset($data['gambar']) && isset($data['posisi_loker']) && isset($data['deskripsi_loker']) && isset($data['syarat_loker']) && isset($data['lokasi']) && isset($data['gaji']) && isset($data['tanggal_posting'])) {
            $query = "INSERT INTO pengguna (id_perusahaan, gambar, posisi_loker, deskripsi_loker, syarat_loker, lokasi, gaji, tanggal_posting) VALUES (:id_perusahaan, :gambar, :posisi_loker, :deskripsi_loker, :syarat_loker, :lokasi, :gaji, :tanggal_posting)";
    
            $this->db->query($query);
    
            $this->db->bind('id_perusahaan', $data['id_perusahaan']);
            $this->db->bind('gambar', $data['gambar']);
            $this->db->bind('posisi_loker', $data['posisi_loker']);
            $this->db->bind('deskripsi_loker', $data['deskripsi_loker']);
            $this->db->bind('syarat_loker', $data['syarat_loker']);
            $this->db->bind('lokasi', $data['lokasi']);
            $this->db->bind('gaji', $data['gaji']);
            $this->db->bind('tanggal_posting', $data['tanggal_posting']);
            
    
            $this->db->execute();
    
            return $this->db->rowCount();
        } else {
            // Handle the case where some keys are missing in the $data array
            // You can throw an exception, log an error, or return an error code, as needed.
        }
    }
    
    

}