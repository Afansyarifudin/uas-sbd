<?php

class User_model
{
    private $table = 'user';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user ');
        $this->db->bind('id_user', $id);
        return $this->db->single();
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO user
                    VALUES 
                ('', :nama_user, :alamat_user, :telp_user, :level_user)";

        $this->db->query($query);
        $this->db->bind('nama_user', $data['nama_user']);
        $this->db->bind('alamat_user', $data['alamat_user']);
        $this->db->bind('telp_user', $data['telp_user']);
        $this->db->bind('level_user', $data['level_user']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($id_user)
    {
        $query = "DELETE FROM user WHERE id_user = :id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id_user);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
