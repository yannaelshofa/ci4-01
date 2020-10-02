<?php

namespace App\Controllers;

use App\Models\MapelModel;

class Mapel extends BaseController
{
  protected $mapelModel;
  public function __construct()
  {
    $this->mapelModel = new MapelModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Data Mapel',
      'mapel' => $this->mapelModel->findAll()
    ];
    // dd($data);
    return view('mapel/index', $data);
  }
  public function yanna($umur)
  {
    echo "yanna umur: $umur";
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
