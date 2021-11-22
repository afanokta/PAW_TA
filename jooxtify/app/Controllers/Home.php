<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function jooxtify()
    {
        return view('jooxtify');
    }
}
