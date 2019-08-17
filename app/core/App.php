<?php

class App
{

  public function __construct()
  {
    $url = $this->parseURL();
    var_dump($url);
  }

  public function parseURL() //fungsi untuk menulis ulang url agar lebih indah
  {
    if (isset($_GET['url'])) {                      //menangkap url di browser
      $url = rtrim($_GET['url'], '/');              //menghilangkan tanda / di akhir url
      $url = filter_var($url, FILTER_SANITIZE_URL); //memfilter kode jahat yang ingin merusak program
      $url = explode('/', $url);                    //memecah url menjadi beberapa bagian dengan pembatas /
      return $url;
    }
  }
}
