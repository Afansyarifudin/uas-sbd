<?php

class Peminjaman extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('peminjaman/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Ruangan_model')->tambahDataRuangan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }
}
