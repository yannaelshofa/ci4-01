<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
  protected $guruModel;
  public function __construct()
  {
    $this->guruModel = new GuruModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Data Guru',
      'guru' => $this->guruModel->findAll()
    ];
    // dd($data);
    return view('guru/index', $data);
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
    return view('guru/create', $data);
  }

  public function save()
  {
    // dd($this->request->getVar());
    $this->guruModel->save([
      'nip' => $this->request->getVar('nip'),
      'nama' => $this->request->getVar('nama'),
      'foto' => $this->request->getVar('foto')
    ]);
    return redirect()->to('/guru');
  }
  public function hapus($id)
  {
    $this->guruModel->delete($id);
    return redirect()->to('/guru');
  }
  public function get_one($id)
  {
    //return $this->siswaModel->where(['id' => $id])->first();
  }
  public function edit($id)
  {
    $data = [
      'title' => 'Rubah Data',

      'guru' => $this->guruModel->where(['id' => $id])->first(),
    ];
    //dd($data);
    return view('guru/edit', $data);
  }
  public function update()
  {
    $this->guruModel->save([
      'id' => $this->request->getVar('id'),
      'nip' => $this->request->getVar('nip'),
      'nama' => $this->request->getVar('nama'),
      'foto' => $this->request->getVar('foto')
    ]);
    return redirect()->to('/guru');
  }
}
