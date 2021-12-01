<?php

class Dinventaris extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('d-inventaris/index');
        $this->view('templates/footer');
    }
}