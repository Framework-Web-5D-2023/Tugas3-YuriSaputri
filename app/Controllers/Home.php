<?php
namespace App\Controllers;

class Home extends BaseController {

    public function index()
    {
        $data = [
            'title' => 'Home',
            'nama' => 'Yuri Saputri',
        ];

        echo view('templates/header', $data);
        echo view('home', $data);
        echo view('templates/footer');
    }
}