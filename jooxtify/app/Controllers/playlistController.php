<?php

namespace App\Controllers;

use App\Models\PlaylistModel;

class playlistController extends loginController
{
  protected $model;
  function __construct()
  {
    $this->model = new playlistModel();
  }

  public function index()
  {
    $Data = $this->model->findAll();
    $delete = $this->model->onlyDeleted()->findAll();
    return parent::cekSession('dashboard/playlist', ['title' => 'Dashboard | Playlist', 'data' => $Data, 'delete' => $delete]);
  }
  public function create()
  {
    return parent::cekSession('dashboard/create/create-playlist', ['title' => 'Dashboard | Playlist']);
  }
  public function add()
  {
    $data = [
      'JUDUL_PLAYLIST' => $_POST['judul'],
      'ID_USER' => $_POST['id_user']
    ];
    $this->model->insert($data);
    return redirect()->to('/dashboard/playlist')->with('success', 'tambah');
  }

  public function edit($id)
  {
    $data = $this->model->find($id);
    return parent::cekSession('dashboard/edit/edit-playlist', ['title' => 'Dashboard | Playlist', 'data' => $data]);
  }

  public function update()
  {
    $data = ['JUDUL_PLAYLIST' => $_POST['judul'], 'ID_USER' => $_POST['id_user']];
    $this->model->update($_POST['id'], $data);
    return redirect()->to('/dashboard/playlist')->with('success', 'update');
  }

  public function delete($id)
  {
    $this->model->delete($id);
    return redirect()->to('/dashboard/playlist')->with('success', 'delete');
  }
  public function restore($id)
  {
    $deleted = $this->model->onlyDeleted()->find($id);
    $this->model->where('ID_USER', $id)->purgeDeleted();
    $data = [
      'ID_PLAYLIST' => $deleted['ID_PLAYLIST'],
      'ID_USER' => $deleted['ID_USER'],
    ];
    $this->model->insert($data);
    return redirect()->to('/dashboard/playlist')->with('success', 'restore');
  }
  public function full_delete($id)
  {
    $this->model->where('ID_USER', $id)->purgeDeleted();
    return redirect()->to('/dashboard/playlist')->with('success', 'fulldelete');
  }
}
