<?php

// Ini ada di folder app / controllers / about.php

class About extends Controller
{
  public function index($nama = 'ALFIN', $pekerjaan = 'Karyawan', $umur = 29)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About >> Index';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $data['judul'] = 'About >> Page';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}

  // Ini ada di folder app / controllers / about.php
