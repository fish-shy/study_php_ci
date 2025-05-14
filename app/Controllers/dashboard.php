<?php
namespace App\Controllers;

class dashboard extends BaseController{
        
    public function index(){
        $data = [
            'title' => 'dashboard',
            'content' => 'v_dashboard',
            
        ];
        return view('template', $data);
    }

}
?>