<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfilMahasiswa extends BaseController
{
    public function index()
    {
        $data['title'] = 'Profil Mahasiswa - Website Sri'; 
        return view('profil-mahasiswa/index', $data);
    }
}
