<?php

namespace App\Controllers;

use App\Models\genreModel;

class genreController extends loginController
{
  protected $genreModel;
  public function __construct()
  {
    $this->genreModel = new genreModel();
  }
  public function index()
  {
    $genre = $this->genreModel->findAll();
    $delete = $this->genreModel->onlyDeleted()->findAll();
    $data = [
      'title' => 'Dashboard | Genre',
      'genre' => $genre,
      'delete' => $delete
    ];
    return parent::cekSession('dashboard/genre', $data);
  }
  public function create()
  {
    $data = [
      'title' => 'Dashboard | Genre'
    ];
    return parent::cekSession('dashboard/create/create-genre', $data);
  }

  public function add()
  {
    $data = [
      'GENRE' => $_POST['genre']
    ];

    $this->genreModel->insert($data);
    return redirect()->to('dashboard/genre')->with('success', 'tambah');
  }

  public function edit($id)
  {
    $data = $this->genreModel->find($id);
    return parent::cekSession('dashboard/edit/edit-genre', ["title" => "Dashboard | Genre","data" => $data]);
  }

  public function update()
  {
    $data = ['GENRE' => $_POST['genre']];
    $this->genreModel->update($_POST['id'], $data);

    return redirect()->to('dashboard/genre')->with('success', 'update');
  }

  public function delete($id)
  {
    $this->genreModel->delete($id);
    return redirect()->to('dashboard/genre')->with('success', 'delete');
  }

  public function restore($id)
  {
    $deleted = $this->genreModel->onlyDeleted()->find($id);
    $this->genreModel->where('ID_GENRE', $id)->purgeDeleted();
    $data = [
      'GENRE' => $deleted['GENRE'],
    ];
    $this->genreModel->insert($data);
    return redirect()->to('/dashboard/genre')->with('success', 'restore');
  }

  public function full_delete($id)
  {
    $this->genreModel->where('ID_GENRE', $id)->purgeDeleted();
    return redirect()->to('/dashboard/genre')->with('success', 'fulldelete');
  }
}
