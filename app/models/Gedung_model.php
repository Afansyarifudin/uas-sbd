<?php

class Gedung_model
{
    private $table = 'gedung';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getGedungById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_gedung = :id_gedung ');
        $this->db->bind('id_gedung', $id);
        return $this->db->single();
    }

    public function getAllGedung()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    public function tambahDataGedung($data)
    {
        $query = "INSERT INTO gedung
                    VALUES 
                ('', :nama_gedung, :ket_gedung)";

        $this->db->query($query);
        $this->db->bind('nama_gedung', $data['nama_gedung']);
        $this->db->bind('ket_gedung', $data['ket_gedung']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataGedung($id_gedung)
    {
        $query = "DELETE FROM gedung WHERE id_gedung = :id_gedung";

        $this->db->query($query);
        $this->db->bind('id_gedung', $id_gedung);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataGedung($data)
    {
        $query = "UPDATE gedung SET 
                    id_gedung = :id_gedung,
                    nama_gedung = :nama_gedung,
                    ket_gedung = :ket_gedung
                WHERE id_gedung = :id_gedung";

        $this->db->query($query);
        $this->db->bind('nama_gedung', $data['nama_gedung']);
        $this->db->bind('ket_gedung', $data['ket_gedung']);
        $this->db->bind('id_gedung', $data['id_gedung']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
