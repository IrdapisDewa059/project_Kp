<?php

namespace App\Controllers;

use App\Models\prodiModel;

class Halaman extends BaseController
{
    public function index()
    {
        $prodi = new prodiModel;
        $prodi_Model = $prodi->findAll();
        $data = ['user' => $prodi_Model];
        echo view('layout/header', $data);
        echo view('main/beranda', $data);
        echo view('layout/footer', $data);
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
        $prodi = new prodiModel;
        $prodi_Model = $prodi->findAll();
        $data = ['user' => $prodi_Model];
        echo view('layout/header', $data);
        echo view('main/galeri', $data);
        echo view('layout/footer', $data);
    }
}
