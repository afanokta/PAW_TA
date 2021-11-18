<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class dashboardController extends BaseController
{
  protected $penggunaModel;
  public function __construct()
  {
    $this->penggunaModel = new PenggunaModel();
  }
  public function dashboard()
  {
    $pengguna = $this->penggunaModel->findAll();
    $data = [
      'title' => 'Dashboard | Pengguna',
      'pengguna' => $pengguna
    ];
    return view('Admin/dash-pengguna', $data);
  }
}
