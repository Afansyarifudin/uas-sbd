<?php

class User_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO user (id_user, nama_user, alamat_user, telp_user, level_user)
                    VALUES ('', :nama_user, :alamat_user, :telp_user, :level_user)";

        $this->db->query($query);
        $this->db->bind('nama_user', $data['nama']);
        $this->db->bind('alamat_user', $data['alamat']);
        $this->db->bind('telp_user', $data['telp']);
        $this->db->bind('level_user', $data['level']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
