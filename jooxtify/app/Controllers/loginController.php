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
    // if ($this->session->get('USERNAME') != null) {
    //   dd($this->session->get('USERNAME'));
    //   return view('dashboard/pengguna');
    // } else {
    //   return view('login');
    // }
  }
  // public function register()
  // {
  //   return view('register');
  // }
  public function login()
  {
    return view('login');
  }
  public function start()
  {
    $user = $this->Model->where('EMAIL', $this->request->getVar('email'))->first();
    if (isset($user)) {
      if (password_verify($this->request->getVar('pass'), $user['PASSWORD'])) {
        $session = [
          "id" => $user['ID_USER'],
          "username" => $user['USERNAME'],
          "email" => $user['EMAIL'],
          "status" => $user['STATUS_USER'],
        ];
        session()->set($session);
        return redirect()->to(base_url('/'));
      } else {
        session()->setFlashdata('error', 'password tidak tepat');
        return redirect()->to(base_url('/login'));
      }
    } else {
      session()->setFlashdata('error', 'email tidak ditemukan');
      return redirect()->to(base_url('/login'));
    }
  }
  public function logout()
  {
    session_destroy();
    return redirect()->to(base_url('/login'));
  }
  public function cekSession($url, $data)
  {
    if (!session()->has('username') && !session()->has('email')) {
      return redirect()->to(base_url('/login'));
    } else {
      return view($url, $data);
    }
  }
}
