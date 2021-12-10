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
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }

    public function hapus($id_barang)
    {
        if ($this->model('Barang_model')->hapusDataBarang($id_barang) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }

    public function getubahbarang()
    {
        echo json_encode($this->model('Barang_model')->getBarangById($_POST['id_barang']));
    }

    public function ubah()
    {
        if ($this->model('Barang_model')->ubahDataBarang($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }
}
