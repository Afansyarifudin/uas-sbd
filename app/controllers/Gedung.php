<?php

class Gedung extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('gedung/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Gedung_model')->tambahDataGedung($_POST) > 0) {
            header('Location: ' . BASEURL . '/gedung');
            exit;
        }
    }
}
