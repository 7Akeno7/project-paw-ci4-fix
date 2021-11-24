<?php

namespace App\Controllers;

class Admin extends BaseController {
  public function index()
  {
    $this->model = new \Myth\Auth\Models\UserModel();

    $this->data = [
      'title' => 'List User',
      'users' => $this->model->getAllUser()
    ];

    return view('admin/index', $this->data);
  }

  public function userList()
  {
    $segments = $this->request->uri->getSegments();

    $users = new \Myth\Auth\Models\UserModel();

    $db = \Config\Database::connect();
    $query = $db->query("
      SELECT U.id, U.username, U.email, U.nama_user, AG.name
      FROM auth_groups AS AG,
           users AS U,
           auth_groups_users AS AGU
      WHERE AGU.user_id = U.id
        AND AGU.group_id = AG.id
    ");

    $this->data = [
      'title' => 'List User',
      'users' => $query->getResult(),
      'segments' => $segments
    ];
    return view('admin/index', $this->data);
  }

  // public function loginUser()
  // {
  //   $this->data = ['title' => 'Login User'];
  //   return view('auth/login-user', $this->data);
  // }

  // public function registerUser()
  // {
  //   $this->data = ['title' => 'Register User'];
  //   return view('auth/register-user', $this->data);
  // }
}
