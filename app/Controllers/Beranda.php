<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
    public function index()
    {
        $data['title'] = 'Beranda - Website Sri';
        return view('beranda/index', $data);
    }
}
