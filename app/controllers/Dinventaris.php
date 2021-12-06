<?php

class Dinventaris extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('d-inventaris/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Ruangan_model')->tambahDataRuangan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/dinventaris');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/dinventaris');
            exit;
        }
    }
}
