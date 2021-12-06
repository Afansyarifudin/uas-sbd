<?php

class Barang extends Controller
{
    public function index()
    {
        $data['ruang'] = $this->model('Ruangan_model')->getAllRuangan();
        $data['brg'] = $this->model('Barang_model')->getAllBarang();
        $this->view('templates/header');
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Barang_model')->tambahDataBarang($_POST) > 0) {
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }
}
