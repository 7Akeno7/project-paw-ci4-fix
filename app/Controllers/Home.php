<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\BukuModel();
    }
    public function index()
    {
        $current_page = $this->request->getVar('page_ebook') ? 
        $this->request->getVar('page_ebook') : 1;
        $listBuku = $this->model->getAllBooks();
        
        $this->data = [
            'title' => 'Landing Page',
            'config' => config('Auth'),
            'listBuku' => $listBuku->paginate(6, 'ebook'),
            'pager' => $this->model->pager,
            'pageNo' => 1 + (($current_page - 1) * 6)
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
