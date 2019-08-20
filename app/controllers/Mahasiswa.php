<?php

// Ini ada di folder app / controllers / Mahasiswa.php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Mahasiwa >> Index';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}

        // Ini ada di folder app / controllers / Mahasiswa.php
