<?php

namespace App\Controllers;

use App\Models\LoginModel;


class Login extends BaseController
{

  protected $loginModel;
  public function __construct()
  {
    $this->loginModel = new LoginModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Data Nilai',

    ];
    // dd($data);
    return view('login/index');
  }
  public function yanna()
  {
    return view('nilai/coba');
  }
  public function create()
  {
    $data = [
      'title' => 'Tambah data',
      'siswa' => $this->siswaModel->findAll(),
      'mapel' => $this->mapelModel->findAll(),
      'guru' => $this->guruModel->findAll()
    ];
    //dd($data);
    return view('nilai/create', $data);
  }

  public function save()
  {
    // dd($this->request->getVar());
    // dd($this->request->getVar());
    $this->nilaiModel->save([
      'idSiswa' => $this->request->getVar('idSiswa'),
      'idGuru' => $this->request->getVar('idGuru'),
      'idMapel' => $this->request->getVar('idMapel'),
      'nilai' => $this->request->getVar('nilai')

    ]);
    return redirect()->to('/nilai');
  }
  public function hapus($id)
  {
    $this->nilaiModel->delete($id);
    return redirect()->to('/nilai');
  }
  public function prosesLogin()
  {

    $password = $this->request->getVar('password');
    $username = $this->request->getVar('username');

    $cek = $this->loginModel->where(array('username' => $username, 'password' => $password))
      ->get()->getResultArray();
    //dd(count($cek));
    if (count($cek) > 0) {
      // echo $cek[0]['username'];
      session()->set('username', $cek[0]['username']);
      session()->set('password', $cek[0]['password']);
      session()->set('level', $cek[0]['level']);
      return redirect()->to('/');
    } else {
      session()->setFlashdata('gagal', 'User Name Passwaord Salah');
      return redirect()->to('/login');
    }
  }
  public function logout()
  {
    session()->destroy();
    return redirect()->to('/login');
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
