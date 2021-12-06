<?php

class Barang_model
{
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO barang 
                    VALUES 
                ('', :id_ruangan, :nama_barang, :merk_barang, :tgl_barang, :jumlah_barang, :ket_barang)";

        $this->db->query($query);
        $this->db->bind('id_ruangan', $data['id_ruangan']);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('merk_barang', $data['merk_barang']);
        $this->db->bind('tgl_barang', $data['tgl_barang']);
        $this->db->bind('jumlah_barang', $data['jumlah_barang']);
        $this->db->bind('ket_barang', $data['ket_barang']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarang($id_barang)
    {
        $query = "DELETE FROM barang WHERE id_barang = :id_barang";

        $this->db->query($query);
        $this->db->bind('id_barang', $id_barang);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
