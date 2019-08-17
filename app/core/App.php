<?php

class App
{

  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseURL();

    // controller
    if (file_exists('../app/controllers/' . $url[0] . '.php')) {  //mengecek apakah ada controller yang sama dengan url
      $this->controller = $url[0]; //jika ada, maka controller default/home diganti menjadi controller dari url
      unset($url[0]); //menghapus string url ke 0
    }

    require_once '../app/controllers/' . $this->controller . '.php'; //membuka controller dari url
    $this->controller = new $this->controller;

    // method
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) { //mengecek apakah ada method di controller yang telah dibuka
        $this->method = $url[1];
        unset($url[1]); //menghapus string url ke 1
      }
    }

    // params
    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // jalankan controller & method, serta kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
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
