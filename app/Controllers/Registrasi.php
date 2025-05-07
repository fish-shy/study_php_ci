<?php

    namespace App\Controllers;

    use App\Models\DataModel;

    class Registrasi extends BaseController{
        function index (){
            $model = new DataModel();
            $data = [ 
                'source' => $model->getSource(),
            ];
            return view('v_tampil', $data);
        }     
    }
?>