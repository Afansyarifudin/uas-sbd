<?php

class Dinventaris extends Controller
{
    public function index()
    {
        $data['ruang'] = $this->model('Ruangan_model')->getAllRuangan();
        $data['invent'] = $this->model('Dinventaris_model')->getAllInventaris();
        $this->view('templates/header');
        $this->view('dinventaris/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Dinventaris_model')->tambahDataDinventaris($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/dinventaris');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/dinventaris');
            exit;
        }
    }

    public function hapus($id_inventaris)
    {
        if ($this->model('Dinventaris_model')->hapusDataDinventaris($id_inventaris) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/dinventaris');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/dinventaris');
            exit;
        }
    }
}
