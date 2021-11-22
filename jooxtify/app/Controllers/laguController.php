<?php

namespace App\Controllers;

use App\Models\laguModel;

class laguController extends BaseController
{
  protected $laguModel;
  public function __construct()
  {
    $this->laguModel = new laguModel();
  }
  public function index()
  {
    $lagu = $this->laguModel->findAll();
    $data = [
      'title' => 'Dashboard | Lagu',
      'lagu' => $lagu,
      'page' => 'lagu'
    ];
    return view('Dashboard/lagu', $data);
  }
}
