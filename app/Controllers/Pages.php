<?php

namespace App\Controllers;

class Pages extends BaseController

{
    public function index()
    {
        $data = [
            'title' => 'Legalinaja'
        ];
        return view('pages/home', $data);
    }
    public function legalisasi()
    {
        $data = [
             'title' => 'Legalisasi UMKM'
        ];
        return view('pages/legalisasi',$data);
    }
    public function about()
    {
        $data = [
             'title' => 'About Legalin Aja'
        ];
        return view('pages/about', $data);
    }
}
