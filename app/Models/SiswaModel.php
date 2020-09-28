<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
  protected $table = 'siswa';
  protected $useTimeStamps = 'true';
  protected $allowedFields = ['nis', 'nama', 'foto'];
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
