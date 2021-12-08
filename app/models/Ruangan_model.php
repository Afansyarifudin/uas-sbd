<?php

class Ruangan_model
{
    private $table = 'ruangan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRuangan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRuanganById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_ruangan = :id_ruangan ');
        $this->db->bind('id_ruangan', $id);
        return $this->db->single();
    }

    public function tambahDataRuangan($data)
    {
        $query = "INSERT INTO ruangan
                    VALUES 
                ('', :id_gedung, :nama_ruangan, :ket_ruangan)";

        $this->db->query($query);
        $this->db->bind('id_gedung', $data['id_gedung']);
        $this->db->bind('nama_ruangan', $data['nama_ruangan']);
        $this->db->bind('ket_ruangan', $data['ket_ruangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataRuangan($id_ruangan)
    {
        $query = "DELETE FROM ruangan WHERE id_ruangan = :id_ruangan";

        $this->db->query($query);
        $this->db->bind('id_ruangan', $id_ruangan);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
