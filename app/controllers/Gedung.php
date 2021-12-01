<?php

class Gedung extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('gedung/index');
        $this->view('templates/footer');
    }
}