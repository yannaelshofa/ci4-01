<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
  protected $siswaModel;
  public function __construct()
  {
    $this->siswaModel = new SiswaModel();
  }
  public function index()
  {

    $data = [
      'title' => 'Data Siswa',
      'siswa' => $this->siswaModel->findAll()
    ];
    // dd($data);
    return view('siswa/index', $data);
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
    return view('siswa/create', $data);
  }

  public function save()
  {
    // dd($this->request->getVar());
    $this->siswaModel->save([
      'nis' => $this->request->getVar('nis'),
      'nama' => $this->request->getVar('nama'),
      'foto' => $this->request->getVar('foto')
    ]);
    return redirect()->to('/siswa');
  }
  public function hapus($id)
  {
    $this->siswaModel->delete($id);
    return redirect()->to('/siswa');
  }
  public function get_one($id)
  {
    //return $this->siswaModel->where(['id' => $id])->first();
  }
  public function edit($id)
  {
    $data = [
      'title' => 'Rubah Data',

      'siswa' => $this->siswaModel->where(['id' => $id])->first(),
    ];
    //dd($data);
    return view('siswa/edit', $data);
  }
  public function update()
  {
    $this->siswaModel->save([
      'id' => $this->request->getVar('id'),
      'nis' => $this->request->getVar('nis'),
      'nama' => $this->request->getVar('nama'),
      'foto' => $this->request->getVar('foto')
    ]);
    return redirect()->to('/siswa');
  }
}
