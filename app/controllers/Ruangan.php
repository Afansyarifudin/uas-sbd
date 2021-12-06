<?php

class Ruangan extends Controller
{
    public function index()
    {
        $data['gdng'] = $this->model('Gedung_model')->getAllGedung();
        $data['ruang'] = $this->model('Ruangan_model')->getAllRuangan();
        $this->view('templates/header');
        $this->view('ruangan/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Ruangan_model')->tambahDataRuangan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        }
    }
}
