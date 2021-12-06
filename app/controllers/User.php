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

    public function tambah()
    {
        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }
}
