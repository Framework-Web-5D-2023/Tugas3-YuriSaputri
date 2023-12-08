<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new \App\Models\MahasiswaModel();
    }

    public function index(): string
    {
        $mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
        $data = [
            'title' => 'Home Page',
            'nama' => 'Yuri Saputri',
            "mahasiswa" => $mahasiswa,
        ];
        $header = view('templates/header', $data);
        $home = view('home', $data);
        $footer = view('templates/footer', $data);
        return $header . $home . $footer;
    }
}
