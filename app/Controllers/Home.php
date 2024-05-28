<?php

namespace App\Controllers;
use App\Models\cvmodel;

class Home extends BaseController
{
    protected $cv;
    public function __construct()
    {
        $this->uts = new cvmodel();
    }
    
    public function cv(){
        $cv = $this->uts->findAll();
        $data = [
            'title' => 'uts',
            'title' => 'Tanggal_Lahir',
            'title' => 'Riwayat_Pendidikan',
            'title' => 'Proyek',
            'title' => 'Penghargaan',
            'cv' => $cv
        ];

        return view('body', $data);
    }
}


