<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class penggunaController extends loginController
{
  protected $model;
  function __construct()
  {
    $this->model = new penggunaModel();
  }

  public function index()
  {
    $Data = $this->model->findAll();
    $delete = $this->model->onlyDeleted()->findAll();
    return parent::cekSession('dashboard/pengguna', ['title' => 'Dashboard | Pengguna', 'data' => $Data, 'delete' => $delete]);
  }
  public function create()
  {
    return parent::cekSession('dashboard/create/create-pengguna', ['title' => 'Dashboard | Pengguna']);
  }
  public function add()
  {
    $data = [
      'USERNAME' => $_POST['username'],
      'EMAIL' => $_POST['email'],
      'PASSWORD' => password_hash($this->request->getVar("pass"), PASSWORD_DEFAULT),
      'STATUS_USER' => $_POST['status'],
    ];
    $this->model->insert($data);
    return redirect()->to('/dashboard/pengguna')->with('success', 'tambah');
  }

  public function edit($id)
  {
    $data = $this->model->find($id);
    return parent::cekSession('dashboard/edit/edit-pengguna', ['title' => 'Dashboard | Pengguna', 'data' => $data]);
  }

  public function update()
  {
    $user = $this->model->find($_POST['id']);
    if ($user['EMAIL'] == $_POST['email']) {
      $data = [
        'USERNAME' => $_POST['username'],
        'STATUS_USER' => $_POST['status'],
      ];
    } else {
      $data = [
        'USERNAME' => $_POST['username'],
        'EMAIL' => $_POST['email'],
        'STATUS_USER' => $_POST['status'],
      ];
    }
    if ($this->model->update($_POST['id'], $data) == false) {
      print_r($this->model->errors());
    }

    // dd($_POST['id']);
    return redirect()->to('/dashboard/pengguna')->with('success', 'update');
  }

  public function delete($id)
  {
    $this->model->delete($id);
    return redirect()->to('/dashboard/pengguna')->with('success', 'delete');
  }
  public function restore($id)
  {
    $deleted = $this->model->onlyDeleted()->find($id);
    $this->model->where('ID_USER', $id)->purgeDeleted();
    $data = [
      'ID_USER' => $deleted['ID_USER'],
      'USERNAME' => $deleted['USERNAME'],
      'EMAIL' => $deleted['EMAIL'],
      'PASSWORD' => $deleted['PASSWORD'],
      'STATUS_USER' => $deleted['STATUS_USER'],
    ];
    $this->model->insert($data);
    return redirect()->to('/dashboard/pengguna')->with('success', 'restore');
  }
  public function full_delete($id)
  {
    $this->model->where('ID_USER', $id)->purgeDeleted();
    return redirect()->to('/dashboard/pengguna')->with('success', 'fulldelete');
  }
}
