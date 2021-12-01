<?php

class Ruangan extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('ruangan/index');
        $this->view('templates/footer');
    }
}