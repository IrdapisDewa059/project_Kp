<?php

namespace App\Models;

use CodeIgniter\Model;

class sidebarModel extends Model
{
    protected $table      = 'menu';
    protected $primaryKey = 'menu_kode';
    protected $allowedFields = ['menu_nama', 'menu_deskripsi', 'menu_site', 'menu_urutan', 'menu_url', 'menu_level'];


    public function getSide()
    {
         return $this->db->table('menu')
         ->join('menu_admin','menu_admin.menu_admin_kode=menu.menu_kode')
         ->get()->getResultArray();  
    }
}