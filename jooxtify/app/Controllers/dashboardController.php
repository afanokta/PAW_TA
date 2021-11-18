<?php

namespace App\Controllers;

class dashboardController extends BaseController
{
  public function dashboard()
  {
    return view('layout/Dashboard');
  }
}
