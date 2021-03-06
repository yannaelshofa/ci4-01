<?php

namespace App\Controllers;

use App\Models\NilaiModel;
use App\Models\SiswaModel;
use App\Models\GuruModel;
use App\Models\MapelModel;

class Nilai extends BaseController
{
  protected $nilaiModel;
  protected $siswaModel;
  protected $mapelModel;
  protected $guruModel;
  public function __construct()
  {
    $this->nilaiModel = new NilaiModel();
    $this->siswaModel = new SiswaModel();
    $this->mapelModel = new MapelModel();
    $this->guruModel = new GuruModel();
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
