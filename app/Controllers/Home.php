<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data = [
            'title' => 'Landing Page',
            'config' => config('Auth')
        ];
        return view('main-page/index', $this->data);
    }

    // public function loginUser()
    // {
    //     $this->data = ['title' => 'Login User'];
    //     return view('auth/login-user', $this->data);
    // }

    // public function registerUser()
    // {
    //     $this->data = ['title' => 'Login User'];
    //     return view('auth/login-user', $this->data);
    // }
}
