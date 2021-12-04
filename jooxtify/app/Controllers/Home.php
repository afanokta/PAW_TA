<?php

namespace App\Controllers;

use App\Models\laguModel;

class Home extends loginController
{
    protected $laguModel;
    public function __construct()
    {
        $this->laguModel = new laguModel();
    }
    public function index()
    {
        $lagu = $this->laguModel->getAll();
        // dd($lagu);
        return parent::cekSession('jooxtify/index', ['title' => 'jooxtify', 'lagu'=>$lagu]);
    }
    public function play()
    {
        return view('layout/play',['lagu'=>$_GET['nilai']]);
    }
    public function search()
    {
        // dd($_GET['nilai']);
        $lagu = $this->laguModel->getSome($_GET['input']);
        return parent::cekSession('jooxtify/index', ['title' => 'jooxtify', 'lagu'=>$lagu]);
    }
}
