<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Diary extends BaseController
{
    public function index()
    {
        $data['title'] = 'Diary - Website Sri'; 
        return view('diary/index', $data);
    }
}
