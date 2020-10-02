<?php

namespace App\Models;

use CodeIgniter\Model;

class MapelModel extends Model
{
  protected $table = 'mapel';
  protected $useTimeStamps = 'true';
  protected $allowedFields = ['namaMapel'];
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
