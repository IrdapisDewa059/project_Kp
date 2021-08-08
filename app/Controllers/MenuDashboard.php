<?php

namespace App\Controllers;

use App\Models\sidebarModel;
use CodeIgniter\Controller;

class MenuDashboard extends Controller {
	public function index() {
        $sidebar = new sidebarModel;
		/*$user_model = $user->findAll();*/
		$side = $sidebar->where('menu_site', 'A')->findAll();
		$data = [
            'tittle' => 'Halaman Web Dinamis || PT.CROP',
            'side' => $side
		];
		return view('Menu/index', $data);
    }
    
    public function tambahWeb() {
        $model = new sidebarModel;
		$session = session();
		$data = [
			'menu_nama' => $this->request->getVar('nama'),
			'menu_deskripsi' => $this->request->getVar('deskripsi'),
			'menu_url' => $this->request->getVar('menu-url'),
			'menu_site' => $this->request->getVar('menu-site'),
			'menu_level' => $this->request->getVar('menu-access'),
            'menu_urutan' => $this->request->getVar('urutan')
		];
		$model->save($data);
		$session->setFlashdata('pesan', 'Data berhasil ditambahkan');
		return redirect()->to('/dashboard/');
    }
}