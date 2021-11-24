<?php

namespace App\Controllers;

class Penulis extends BaseController {

  public function __construct()
  {
    $this->model = new \App\Models\PenulisModel();
  }

  public function index()
  {
    $segments = $this->request->uri->getSegments();
    $this->data = [
      'title' => 'Daftar Penulis',
      'segments' => $segments,
      'penulis' => $this->model->findAll()
    ];
    return view('admin/penulis/listPenulis', $this->data);
  }

  public function formTambah()
  {
    // $this->model->save([
    //   'nama_penulis' => $this->request->getVar('nama_penulis')
    // ]);

    $segments = $this->request->uri->getSegments();

    $this->data = [
      'title' => 'Form Tambah Penulis',
      'segments' => $segments
      // 'users' => $this->model->getUserList()
    ];
    return view('admin/penulis/formTambahPenulis', $this->data);
  }

  public function tambah()
  {
    if (!$this->validate([
      'nama_penulis' => 'required|is_unique[penulis.nama_penulis]'
    ])) {
      return redirect()->to(base_url(). "/penulis/formTambah");
    }
    
    $this->model->save([
      'nama_penulis' => $this->request->getVar('nama_penulis')
    ]);

    session()->setFlashdata('pesan','Data berhasil ditambahkan!');

    return redirect()->to(base_url() . '/penulis');
  }
}