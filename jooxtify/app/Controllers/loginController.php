<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class loginController extends BaseController
{

  protected $session;
  protected $Model;
  public function __construct()
  {
    $this->Model = new PenggunaModel();
    $this->session = \Config\Services::session();
  }
  public function index()
  {
    return view('dashboard/genre');
  }
  public function start()
  {
    echo ('aaa');
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $user = $this->Model->where('EMAIL', $email)->first();
    if (!$user == null) {
      if ($user['PASSWORD'] == $_POST['pass']) {
        $this->session->set($user);
        return redirect()->to('/dashboard');
        // return redirect('/dashboard');
      }
    }
  }
}
