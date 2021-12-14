<?php

class Dinventaris_model
{
    private $table = 'inventaris';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getInventarisById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_inventaris = :id_inventaris ');
        $this->db->bind('id_inventaris', $id);
        return $this->db->single();
    }

    public function getAllInventaris()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function joinInventaris()
    {
        $this->db->query("SELECT inventaris.nama_inventaris, inventaris.tgl_inventaris, ruangan.nama_ruangan  FROM inventaris
            JOIN ruangan ON ruangan.id_ruangan = inventaris.id_ruangan");
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
    public function ubahDataInventaris($data)
    {
        $query = "UPDATE inventaris SET 
                    id_inventaris = :id_inventaris,
                    id_ruangan = :id_ruangan,
                    nama_inventaris = :nama_inventaris,
                    tgl_inventaris = :tgl_inventaris,
                    ket_inventaris = :ket_inventaris
                WHERE id_inventaris = :id_inventaris";

        $this->db->query($query);
        $this->db->bind('id_ruangan', $data['id_ruangan']);
        $this->db->bind('nama_inventaris', $data['nama_inventaris']);
        $this->db->bind('tgl_inventaris', $data['tgl_inventaris']);
        $this->db->bind('ket_inventaris', $data['ket_inventaris']);
        $this->db->bind('id_inventaris', $data['id_inventaris']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
