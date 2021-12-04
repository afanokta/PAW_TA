<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class registerController extends BaseController
{
  // protected $validation;
  protected $model;

  function __construct()
  {
    // $this->validation =  \Config\Services::validation();
    $this->model = new PenggunaModel();
  }
  public function index()
  {
    return view('register');
  }
  public function reg()
  {
    if (!$this->validate([
      'username' => [
        'rules' => 'required'
      ],
      'email' => [
        'rules' => 'required|valid_email'

      ],
      'pass' => [
        'rules' => 'required|min_length[8]'
      ]
    ])) {
      session()->setFlashdata('error', $this->validator->listErrors());
      return redirect()->to(base_url('/register'));
    } else {
      $data = [
        "USERNAME" => $this->request->getVar("username"),
        "EMAIL" => $this->request->getVar("email"),
        "PASSWORD" => password_hash($this->request->getVar("pass"), PASSWORD_DEFAULT),
        "STATUS_USER" => "REGULER"
      ];
      if ($this->model->insert($data) == true) {
        // $user = $this->model->where('EMAIL', $this->request->getVar("email"))->first();

        // $session = [
        //   "id" => $user['ID_USER'],
        //   "username" => $this->request->getVar("username"),
        //   "email" => $this->request->getVar("email")
        // ];

        // session()->set($session);
        return redirect()->to(base_url('/login'));
      } else {
        return view('register', ['errors' => $this->model->errors()]);
      };
    }
  }
}
