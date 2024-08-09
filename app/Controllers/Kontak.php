<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kontak extends BaseController
{
    public function index()
    {
        $data['title'] = 'Kontak - Website Sri'; 
        return view('kontak/index', $data);
    }
}
