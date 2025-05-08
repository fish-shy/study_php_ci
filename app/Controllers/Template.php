<?php
namespace App\Controllers;


use App\Models\SalamModel;

class Template extends BaseController{
        
    public function index(){
        return view('template');
    }

}
?>