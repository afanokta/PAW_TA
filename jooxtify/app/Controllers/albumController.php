<?php

namespace App\Controllers;

use App\Models\AlbumModel;
use App\Models\PenyanyiModel;

class albumController extends BaseController
{
    protected $model;
    protected $penyanyi;
    function __construct()
    {
        $this->model = new AlbumModel();
        $this->penyanyi = new PenyanyiModel();
    }

    public function index()
    {
        $Data = $this->model->findAll();
        $delete = $this->model->onlyDeleted()->findAll();
        return view('dashboard/album', ['title' => 'album', 'data' => $Data, 'delete' => $delete]);
    }
    public function create()
    {
        $penyanyi = $this->penyanyi->findAll();
        return view('dashboard/create/create-album', ['title' => 'create album', 'penyanyi' => $penyanyi]);
    }
    public function add()
    {
        $data = [
            'JUDUL_ALBUM' => $_POST['judul'],
            'ID_PENYANYI' => $_POST['penyanyi'],
            'TGL_TERBIT_ALBUM' => $_POST['rilis'],
        ];

        $this->model->insert($data);
        return redirect()->to('/dashboard/album')->with('success', 'tambah');
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $penyanyi = $this->penyanyi->findAll();
        // var_dump($data);
        return view('dashboard/edit/edit-album', ['title' => 'album', 'data' => $data, 'penyanyi' => $penyanyi]);
    }

    public function update()
    {
        $data = [
            'JUDUL_ALBUM' => $_POST['judul'],
            'ID_PENYANYI' => $_POST['penyanyi'],
            'TGL_TERBIT_ALBUM' => $_POST['rilis']
        ];
        $this->model->update($_POST['id'], $data);
        return redirect()->to('/dashboard/album')->with('success', 'update');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/dashboard/album')->with('success', 'delete');
    }
    public function restore($id)
    {
        $deleted = $this->model->onlyDeleted()->find($id);
        $this->model->where('ID_ALBUM', $id)->purgeDeleted();
        $data = [
            'ID_ALBUM' => $deleted['ID_ALBUM'],
            'JUDUL_ALBUM' => $deleted['JUDUL_ALBUM'],
            'ID_PENYANYI' => $deleted['ID_PENYANYI'],
            'TAHUN_TERBIT_ALBUM' => $deleted['TAHUN_TERBIT_ALBUM'],
        ];
        $this->model->insert($data);
        return redirect()->to('/dashboard/album')->with('success', 'restore');
    }
    public function full_delete($id)
    {
        $this->model->where('ID_ALBUM', $id)->purgeDeleted();
        return redirect()->to('/dashboard/album')->with('success', 'fulldelete');
    }
}
