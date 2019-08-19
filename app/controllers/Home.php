<?php

// Ini ada di folder app / controllers / Home.php
class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home >> Index';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data); //memanggil core controller dengan method view serta mengirimkan data di folder core
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}

        // Ini ada di folder app / controllers / Home.php
