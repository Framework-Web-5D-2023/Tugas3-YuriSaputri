<?php
namespace App\Controllers;

class About extends BaseController {

    public function index()
    {
        $data = [
            'title' => 'About Us',
            'nama' => 'Yuri Saputri',
        ];

        echo view('templates/header', $data);
        echo view('about', $data);
        echo view('templates/footer');
    }
}