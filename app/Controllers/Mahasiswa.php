<?php
namespace App\Controllers;

class Mahasiswa extends BaseController{
        
    public function index(){
        $data = [
            'title' => 'Mahasiswa',
            'content' => 'v_mahasiswa',
            
        ];
        return view('template', $data);
    }

}
?>