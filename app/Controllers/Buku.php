<?php

namespace App\Controllers;

class Buku extends BaseController {

  public function __construct()
  {
    // $this->model = new \App\Models\PenulisModel();
  }

  public function index()
  {
    $segments = $this->request->uri->getSegments();
    $this->data = [
      'title' => 'Daftar Buku',
      'segments' => $segments,
      // 'penulis' => $this->model->findAll()
    ];
    return view('admin/buku/listBuku', $this->data);
  }

  public function formTambah()
  {
    $modelPenulis = new \App\Models\PenulisModel();
    $segments = $this->request->uri->getSegments();

    $this->data = [
      'title' => 'Form Tambah Penulis',
      'segments' => $segments,
      'penulis' => $modelPenulis->findAll()
    ];
    return view('admin/buku/formTambahBuku', $this->data);
  }
}