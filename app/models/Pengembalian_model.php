<?php

class Pengembalian_model
{
    private $table = 'pengembalian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengembalian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function kembaliDataDinventaris($data)
    {
        $query = " INSERT INTO pengembalian
                    VALUES 
                ('', :id_peminjaman, :id_user, :nama_pengembali, :tgl_kembali)";

        $this->db->query($query);
        $this->db->bind('id_peminjaman', $data['id_peminjaman']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('nama_pengembali', $data['nama_pengembali']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);



        $this->db->execute();

        return $this->db->rowCount();
    }
}
