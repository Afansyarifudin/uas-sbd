<?php

class User extends Controller 
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('user/index');
        $this->view('templates/footer');
    }
}