<?php

class Dinventaris_model
{
    private $table = 'inventaris';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllInventaris()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataDinventaris($data)
    {
        $query = " INSERT INTO inventaris
                    VALUES 
                ('',:id_ruangan, :nama_inventaris, :tgl_inventaris, :ket_inventaris)";

        $this->db->query($query);
        $this->db->bind('id_ruangan', $data['id_ruangan']);
        $this->db->bind('nama_inventaris', $data['nama_inventaris']);
        $this->db->bind('tgl_inventaris', $data['tgl_inventaris']);
        $this->db->bind('ket_inventaris', $data['ket_inventaris']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataDinventaris($id_inventaris)
    {
        $query = "DELETE FROM inventaris WHERE id_inventaris = :id_inventaris";

        $this->db->query($query);
        $this->db->bind('id_inventaris', $id_inventaris);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
