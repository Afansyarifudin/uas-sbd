<?php

class Inventaris extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('inventaris/index');
        $this->view('templates/footer');
    }
}