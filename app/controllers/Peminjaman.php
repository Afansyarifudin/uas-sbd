<?php

class Peminjaman extends Controller
{
    public function index()
    {
        $data['usr'] = $this->model('User_model')->getAllUser();
        $data['pmj'] = $this->model('Peminjaman_model')->getAllPeminjaman();
        $data['peng'] = $this->model('Pengembalian_model')->getAllPengembalian();
        $this->view('templates/header');
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function hapus($id_peminjaman)
    {
        if ($this->model('Peminjaman_model')->hapusDataPeminjaman($id_peminjaman) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }


    public function kembali()
    {
        if ($this->model('Pengembalian_model')->kembaliDataDinventaris($_POST) > 0) {
            Flasher::setFlash('berhasil', 'dikembalikan', 'success');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dikembalikan', 'danger');
            header('Location: ' . BASEURL . '/peminjaman');
            exit;
        }
    }
}
