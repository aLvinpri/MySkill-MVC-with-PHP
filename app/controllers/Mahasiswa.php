<?php

// Ini ada di folder app / controllers / Mahasiswa.php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Mahasiwa >> Index';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}

        // Ini ada di folder app / controllers / Mahasiswa.php