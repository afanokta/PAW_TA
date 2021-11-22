<?php

namespace App\Controllers;

use App\Models\genreModel;

class genreController extends BaseController
{
  protected $genreModel;
  public function __construct()
  {
    $this->genreModel = new genreModel();
  }
  public function index()
  {
    $genre = $this->genreModel->findAll();
    $data = [
      'title' => 'Dashboard | Genre',
      'genre' => $genre,
      'page' => 'genre'
    ];
    return view('dashboard/genre', $data);
  }
  public function create()
  {
    $data = [
      'title' => 'Dashboard | Genre',
      'page' => 'genre'
    ];
    return view('dashboard/create', $data);
  }
}
