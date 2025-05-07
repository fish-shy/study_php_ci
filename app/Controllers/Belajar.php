<?php

namespace App\Controllers;

class Belajar extends BaseController
{

    public function index()
    {
        echo "ini page belajar";
    }

    public function kali($a, $b)
    {
        $hasil = $a * $b;
        echo "hasil kali : $hasil";
    }

    public function bagi($a, $b)
    {
        $hasil = $a / $b;
        echo "hasil bagi : $hasil";
    }
    public function pesan()
    {
        $data =[ 
            'title' => "belajar codeignitor",
                
            'pesan' => "saya sedan belajar view pada codeigniter",
        ];
        return view('v_belajar_pesan', $data);

    }
}
