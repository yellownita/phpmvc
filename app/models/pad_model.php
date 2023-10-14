<?php

class pad_model {
    private $db;
    private $table = 'admin'; // Ubah tabel menjadi 'siswa'

    public function __construct() {
        $this->db = new Database;
    }
    

public function getAllpad(){
    $this->db->query('SELECT * FROM admin');
    return $this->db->resultSet();
}

    public function getpadById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db ->single();
    }
}