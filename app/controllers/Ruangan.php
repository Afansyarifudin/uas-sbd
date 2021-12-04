<?php

class Ruangan extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('ruangan/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Ruangan_model')->tambahDataRuangan($_POST) > 0) {
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        }
    }
}
