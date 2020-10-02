<?php

namespace App\Controllers;

use App\Models\NilaiModel;

class Nilai extends BaseController
{
  protected $nilaiModel;
  public function __construct()
  {
    $this->nilaiModel = new NilaiModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Data Nilai',
      'siswa' => $this->nilaiModel->tampilView()
    ];
    // dd($data);
    return view('nilai/index', $data);
  }
  public function yanna()
  {
    return view('nilai/coba');
  }
  public function create()
  {
    $data = [
      'title' => 'Tambah data'
    ];
    return view('mapel/create', $data);
  }

  public function save()
  {
    // dd($this->request->getVar());
    $this->mapelModel->save([
      'namaMapel' => $this->request->getVar('namaMapel'),

    ]);
    return redirect()->to('/mapel');
  }
  public function hapus($id)
  {
    $this->mapelModel->delete($id);
    return redirect()->to('/mapel');
  }
  public function get_one($id)
  {
    //return $this->siswaModel->where(['id' => $id])->first();
  }
  public function edit($id)
  {
    $data = [
      'title' => 'Rubah Data',

      'mapel' => $this->mapelModel->where(['id' => $id])->first(),
    ];
    //dd($data);
    return view('mapel/edit', $data);
  }
  public function update()
  {
    $this->mapelModel->save([
      'id' => $this->request->getVar('id'),
      'namaMapel' => $this->request->getVar('namaMapel')

    ]);
    return redirect()->to('/mapel');
  }
}
