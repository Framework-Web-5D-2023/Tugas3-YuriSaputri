<?php

namespace App\Controllers;

class About extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new \App\Models\MahasiswaModel();
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
        $data = [
            'title' => 'About Us',
            'nama'  => 'Yuri Saputri',
            'npm'   => '2110631170041',
            'mahasiswa' => $mahasiswa,
        ];
        return view('templates/header', $data) . view('about', $data) . view('templates/footer');
    }
}
