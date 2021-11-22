<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class penggunaController extends BaseController
{
  protected $penggunaModel;
  public function __construct()
  {
    $this->penggunaModel = new PenggunaModel();
  }
  public function index()
  {
    $pengguna = $this->penggunaModel->findAll();
    $data = [
      'title' => 'Dashboard | Pengguna',
      'pengguna' => $pengguna,
      'page' => 'pengguna'
    ];
    return view('Dashboard/pengguna', $data);
  }
  public function add()
  {

    $pengguna = $this->penggunaModel->set($this->penggunaModel->primaryKey);
    $data = [
      'title' => 'Dashboard | Pengguna',
      'pengguna' => $pengguna,
      'page' => 'pengguna'
    ];
    return view('dashboard/pengguna', $data);
  }
}
