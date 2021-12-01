<?php

class Barang extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('barang/index');
        $this->view('templates/header');
    }
}