<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kuliah extends BaseController
{
    public function index()
    {
        $data['title'] = 'Kuliah - Website Sri'; 
        return view('kuliah/index', $data);
    }
}
