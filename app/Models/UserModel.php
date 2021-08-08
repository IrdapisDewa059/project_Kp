<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	protected $allowedFields = ['user_name', 'user_profile', 'user_email', 'user_password', 'user_created_at', 'user_level'];

	public function getAdmin($id) {
		return $this->where(['user_id' => $id])->first();
	}

	public function search($cari) {
/*		$builder = $this->table('akti_dosen');
$builder->like('dosen_nip', $cari);
return $builder;*/
		return $this->table('users')->like('user_name', $cari)->orLike('user_level', $cari);
	}


}
