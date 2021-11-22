<?php

namespace App\Controllers;

use App\Models\penyanyiModel;

class penyanyiController extends BaseController
{
  protected $penyanyiModel;
  function __construct()
  {
    $this->penyanyiModel = new penyanyiModel();
  }
  function index()
  {
    $penyanyi = $this->penyanyiModel->findAll();
    $data = [
      'title' => 'Dashboard | Penyanyi',
      'penyanyi' => $penyanyi,
      'page' => 'penyanyi'
    ];
    return view('Dashboard/penyanyi', $data);
  }
}
