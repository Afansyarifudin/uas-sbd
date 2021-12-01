<?php

class Peminjaman extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('peminjaman/index');
        $this->view('templates/footer');
    }
}