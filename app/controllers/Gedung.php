<?php

class Gedung extends Controller
{
    public function index()
    {
        $data['gdng'] = $this->model('Gedung_model')->getAllGedung();
        $this->view('templates/header');
        $this->view('gedung/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Gedung_model')->tambahDataGedung($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/gedung');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/gedung');
            exit;
        }
    }

    public function hapus($id_gedung)
    {
        if ($this->model('Gedung_model')->hapusDataGedung($id_gedung) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/gedung');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/gedung');
            exit;
        }
    }
}
