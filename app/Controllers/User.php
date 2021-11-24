<?php

namespace App\Controllers;

class User extends BaseController {
  public function index()
  {
    // $this->model = new \App\Models\UserModel();
    $segments = $this->request->uri->getSegments();
    if (!isset($segments[1]))
    array_push($segments, ' ');

    $this->data = [
      'title' => 'My Profile',
      'segments' => $segments
    ];
    return view('user-profile/index', $this->data);
  }

  public function loginUser()
  {
    $this->data = ['title' => 'Login User'];
    return view('auth/login-user', $this->data);
  }

  public function registerUser()
  {
    $this->data = ['title' => 'Register User'];
    return view('auth/register-user', $this->data);
  }
}
