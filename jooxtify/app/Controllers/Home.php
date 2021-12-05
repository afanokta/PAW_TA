<?php

namespace App\Controllers;

use App\Models\laguModel;
use App\Models\penggunaModel;

class Home extends loginController
{
    protected $laguModel;
    protected $penggunaModel;
    public function __construct()
    {
        $this->laguModel = new laguModel();
        $this->penggunaModel = new penggunaModel();
    }
    public function index()
    {
        $lagu = $this->laguModel->getAll();
        // dd($lagu);
        return parent::cekSessionPengguna('jooxtify/index', ['title' => 'Jooxtify | Home', 'lagu' => $lagu]);
    }
    public function detail($id)
    {
        $lagu = $this->laguModel->getLagu($id);
        // dd($lagu);
        return parent::cekSessionPengguna('jooxtify/detail', ['title' => 'Jooxtify | Home', 'lagu' => $lagu]);
    }
    public function play()
    {
        return view('layout/play', ['lagu' => $_GET['nilai'], 'judul' => $_GET['judul'], 'penyanyi' => $_GET['penyanyi']]);
    }
    public function search()
    {
        // dd($_GET['nilai']);

        $lagu = $this->laguModel->getSome($_GET['nilai']);
        return view('layout/search', ['lagu' => $lagu]);
    }
    public function profile($id)
    {
        $Data = $this->penggunaModel->find($id);
        return parent::cekSessionPengguna('jooxtify/profile', ['title' => 'Jooxtify | Profile', 'Data' => $Data]);
    }
    public function updateProfile()
    {
        $id = session()->get('id');
        $user = $this->penggunaModel->find($_POST['id']);
        if ($user['EMAIL'] == $_POST['email']) {
            $data = [
                'USERNAME' => $_POST['username'],
            ];
        } else {
            $data = [
                'USERNAME' => $_POST['username'],
                'EMAIL' => $_POST['email'],
            ];
        }
        if ($this->penggunaModel->update($_POST['id'], $data) == false) {
            print_r($this->penggunaModel->errors());
        }
        session()->remove('username');
        session()->set(['username' => $_POST['username']]);
        // dd($_POST['id']);
        return redirect()->to("/profile/$id")->with('success', 'update');
    }
    public function about()
    {
        return parent::cekSessionPengguna('jooxtify/about', ['title' => 'Jooxtify | About']);
    }
}
