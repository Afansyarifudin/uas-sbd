<?php

class User extends Controller
{
    public function index()
    {
        $data['usr'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header');
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['usr'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header');
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function hapus($id_user)
    {
        if ($this->model('User_model')->hapusDataUser($id_user) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function getubahuser()
    {
        echo json_encode($this->model('User_model')->getUserById($_POST['id_user']));
    }

    public function ubah()
    {
        if ($this->model('User_model')->ubahDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }
}
