<?php

class Peminjaman_model
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function pinjamDataDinventaris($data)
    {
        $query = " INSERT INTO peminjaman
                    VALUES 
                ('',:id_user, :id_inventaris, :nama_peminjam, :tgl_peminjaman, :ket_peminjaman)";

        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('id_inventaris', $data['id_inventaris']);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('tgl_peminjaman', $data['tgl_peminjaman']);
        $this->db->bind('ket_peminjaman', $data['ket_peminjaman']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPeminjaman($id_peminjaman)
    {
        $query = "DELETE FROM peminjaman WHERE id_peminjaman = :id_peminjaman";

        $this->db->query($query);
        $this->db->bind('id_peminjaman', $id_peminjaman);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
