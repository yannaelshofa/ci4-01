<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
  protected $table = 'nilai';
  protected $useTimeStamps = 'true';
  protected $allowedFields = ['idSiswa', 'idGuru', 'idMapel', 'nilai'];
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
  public function tampilView()
  {
    $db = \Config\Database::connect();
    $query = $db->query("SELECT * from v_nilai ");
    return $query->getResultArray();
  }
}
