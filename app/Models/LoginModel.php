<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
  protected $table = 'users';
  protected $useTimeStamps = 'true';
  //protected $allowedFields = ['idSiswa', 'idGuru', 'idMapel', 'nilai'];
  // //public function getKomik($slug = false)
  // {
  //   if ($slug == false) {
  //     return $this->findAll();
  //   } else {
  //     return $this->where(['slug' => $slug])->first();
  //   }
  // }
  // public function ambilKomik($id)
  // {
  //   return $this->where(['id' => $id])->first();
  // }

}
