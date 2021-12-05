<?php

namespace App\Controllers;

use App\Models\laguModel;
use App\Models\PenyanyiModel;
use App\Models\AlbumModel;
use App\Models\GenreModel;

class laguController extends loginController
{
  protected $model;
  protected $modelPenyanyi;
  protected $modelAlbum;
  function __construct()
  {
    $this->model = new laguModel();
    $this->modelPenyanyi = new PenyanyiModel();
    $this->modelAlbum = new AlbumModel();
    $this->modelGenre = new GenreModel();
  }

  public function index()
  {
    $Data = $this->model->findAll();
    $delete = $this->model->onlyDeleted()->findAll();
    return parent::cekSession('dashboard/lagu', ['title' => 'Dashboard | Lagu', 'data' => $Data, 'delete' => $delete]);
  }
  public function create()
  {
    $penyanyi = $this->modelPenyanyi->findAll();
    $album = $this->modelAlbum->findAll();
    $genre = $this->modelGenre->findAll();
    return view('dashboard/create/create-lagu', ['title' => 'Dashboard | Lagu', 'penyanyi' => $penyanyi, 'album' => $album, 'genre' => $genre]);
  }
  public function add()
  {
    helper('text');
    $file = $this->request->getFile('file');
    $filename = random_string('anum', 10) . '.' . $file->getClientExtension();

    $file->move('lagu', $filename);

    if ($file->hasMoved()) {
      $data = [
        "ID_PENYANYI" => $_POST['penyanyi'],
        "ID_ALBUM" => $_POST['album'],
        "ID_GENRE" => $_POST['genre'],
        "JUDUL_LAGU" => $_POST['judul'],
        "FILE_LAGU" => $filename,
        "TAHUN_TERBIT_LAGU" => $_POST['tahun']
      ];
      // dd($data);
      $this->model->insert($data);
      return redirect()->to('/dashboard/lagu')->with('success', 'tambah');
    }
  }

  public function edit($id)
  {
    $penyanyi = $this->modelPenyanyi->findAll();
    $album = $this->modelAlbum->findAll();
    $data = $this->model->find($id);
    // var_dump($data);
    return parent::cekSession('dashboard/edit/edit-lagu', ['title' => 'Dashboard | Lagu', 'data' => $data, 'penyanyi' => $penyanyi, 'album' => $album]);
  }

  public function update()
  {
    // var_dump($this->request->getFile('file'));

    if ($this->request->getFile('file') == null) {
      $data = [
        "ID_PENYANYI" => $_POST['penyanyi'],
        "ID_ALBUM" => $_POST['album'],
        "JUDUL_LAGU" => $_POST['judul'],
        "FILE_LAGU" => $_POST['lastfile'],
        "TAHUN_TERBIT_LAGU" => $_POST['tahun']
      ];
    } else {
      // helper('filesystem');

      // delete_files('/public/lagu/'.$_POST['lastfile']);

      unlink('lagu/' . $_POST['lastfile']);

      helper('text');
      $file = $this->request->getFile('file');
      $filename = random_string('anum', 10) . '.' . $file->getClientExtension();

      $file->move('lagu', $filename);

      if ($file->hasMoved()) {
        $data = [
          "ID_PENYANYI" => $_POST['penyanyi'],
          "ID_ALBUM" => $_POST['album'],
          "JUDUL_LAGU" => $_POST['judul'],
          "FILE_LAGU" => $filename,
          "TAHUN_TERBIT_LAGU" => $_POST['tahun']
        ];
      }
    }

    $this->model->update($_POST['id'], $data);
    return redirect()->to('/dashboard/lagu')->with('success', 'update');
  }

  public function delete($id)
  {
    $this->model->delete($id);
    return redirect()->to('/dashboard/lagu')->with('success', 'delete');
  }
  public function restore($id)
  {
    $deleted = $this->model->onlyDeleted()->find($id);
    $this->model->where('ID_LAGU', $id)->purgeDeleted();
    $data = [
      'ID_LAGU' => $deleted['ID_LAGU'],
      'ID_PENYANYI' => $deleted['ID_PENYANYI'],
      'ID_ALBUM' => $deleted['ID_ALBUM'],
      'ID_GENRE' => $deleted['ID_GENRE'],
      'FILE_LAGU' => $deleted['FILE_LAGU'],
      'JUDUL_LAGU' => $deleted['JUDUL_LAGU'],
      'TAHUN_TERBIT_LAGU' => $deleted['TAHUN_TERBIT_LAGU'],
    ];
    $this->model->insert($data);
    return redirect()->to('/dashboard/lagu')->with('success', 'restore');
  }
  public function full_delete1($id, $filename)
  {
    // dd($data);
    // try {
    $this->model->where('ID_LAGU', $id)->purgeDeleted();
    $filepath = "lagu/$filename";
    unlink($filepath);
    var_dump('TEST');
    $data = $this->model->onlyDeleted()->find((int)$id);
    return redirect()->to('/dashboard/lagu')->with('success', 'fulldelete');
    // } catch (\Exception $e) {
    // $this->model->where('ID_LAGU', $id)->purgeDeleted();
    // return redirect()->to('/dashboard/lagu')->with('success', 'fulldelete');
    // }
  }
  public function full_delete($id, $filename)
  {
    $this->model->where('ID_LAGU', (int)$id)->purgeDeleted();

    session()->setFlashdata('success', 'lagu berhasil dihapus permanen');
    return redirect()->to(base_url('/dashboard/lagu'));
  }
}
