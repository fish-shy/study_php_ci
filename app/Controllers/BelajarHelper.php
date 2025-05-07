<?php

    namespace App\Controllers;

    Class BelajarHelper extends baseController{
        public function index(){
            helper('form');
            return view('v_belajarhelper');
        }
        public function helper(){
            helper('belajar');
            helper('number');
            $amount = number_to_currency(100000000000000, 'IDR', 'id_ID',2);
            echo belajar($amount);
    }
    }
?>