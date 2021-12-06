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
    }

    public function tambahDataRuangan($data)
    {
        $query = "INSERT INTO ruangan
                    VALUES 
                ('',  )";
    }
}
