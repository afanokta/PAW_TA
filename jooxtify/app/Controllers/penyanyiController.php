<?php

namespace App\Controllers;

use App\Models\penyanyiModel;

class penyanyiController extends loginController
{
  protected $model;
  function __construct()
  {
    $this->model = new penyanyiModel();
  }

  public function index()
  {
    $Data = $this->model->findAll();
    $delete = $this->model->onlyDeleted()->findAll();
    return parent::cekSession('dashboard/penyanyi', ['title' => 'Dashboard | Penyanyi', 'data' => $Data, 'delete' => $delete]);
  }
  public function create()
  {
    return parent::cekSession('dashboard/create/create-penyanyi', ['title' => 'Dashboard | Penyanyi']);
  }
  public function add()
  {
    helper('text');
    $file = $this->request->getFile('foto');
    $filename = random_string('anum', 10) . '.' . $file->getClientExtension();
    $file->move('img-penyanyi', $filename);

    if ($file->hasMoved()) {
    $data = [
      'NAMA_PENYANYI' => $_POST['nama'],
      'TGL_LAHIR_PENYANYI' => $_POST['tgl'],
      'FOTO' => $filename,
    ];
  }
    $this->model->insert($data);
    return redirect()->to('/dashboard/penyanyi')->with('success', 'tambah');
  }

  public function edit($id)
  {
    $data = $this->model->find($id);
    // var_dump($data);
    return parent::cekSession('dashboard/edit/edit-penyanyi', ['title' => 'Dashboard | Penyanyi', 'data' => $data]);
  }

  public function update()
  {
    if ($this->request->getFile('foto') == null) {
    $data = [
      'NAMA_PENYANYI' => $_POST['nama'],
      'TGL_LAHIR_PENYANYI' => $_POST['tgl'],
      'FOTO' => $_POST['foto'],
    ];
    } else {
      unlink('img-penyanyi/' . $_POST['lastfile']);

      helper('text');
      $file = $this->request->getFile('foto');
      $filename = random_string('anum', 10) . '.' . $file->getClientExtension();

      $file->move('img-penyanyi', $filename);

      if ($file->hasMoved()) {
        $data = [
          'NAMA_PENYANYI' => $_POST['nama'],
          'TGL_LAHIR_PENYANYI' => $_POST['tgl'],
          'FOTO' => $filename,
        ];
      }
    }
    $this->model->update($_POST['id'], $data);
    return redirect()->to('/dashboard/penyanyi')->with('success', 'update');
  }

  public function delete($id)
  {
    $this->model->delete($id);
    return redirect()->to('/dashboard/penyanyi')->with('success', 'delete');
  }
  public function restore($id)
  {
    $deleted = $this->model->onlyDeleted()->find($id);
    $this->model->where('ID_PENYANYI', $id)->purgeDeleted();
    $data = [
      'ID_PENYANYI' => $deleted['ID_PENYANYI'],
      'NAMA_PENYANYI' => $deleted['NAMA_PENYANYI'],
      'TGL_LAHIR_PENYANYI' => $deleted['TGL_LAHIR_PENYANYI'],
      'FOTO' => $deleted['FOTO'],
    ];
    $this->model->insert($data);
    return redirect()->to('/dashboard/penyanyi')->with('success', 'restore');
  }
  public function full_delete($id)
  {
    $this->model->where('ID_PENYANYI', $id)->purgeDeleted();
    return redirect()->to('/dashboard/penyanyi')->with('success', 'fulldelete');
  }
}
