<?php

namespace App\Controllers;

class Halaman extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('main/beranda');
        echo view('layout/footer');
    }
    //--------------------------------------------------------------------
    public function gabungusaha()
    {
        echo view('layout/header');
        echo view('main/gabungusaha');
        echo view('layout/footer');
    }
    //---------------------------------------------------------------------
    public function gabungdriver()
    {
        echo view('layout/header');
        echo view('main/gabungdriver');
        echo view('layout/footer');
    }
    //---------------------------------------------------------------------
    public function tentang()
    {
        echo view('layout/header');
        echo view('main/tentang');
        echo view('layout/footer');
    }
    //---------------------------------------------------------------------
    public function galeri()
    {
        echo view('layout/header');
        echo view('main/galeri');
        echo view('layout/footer');
    }
}
