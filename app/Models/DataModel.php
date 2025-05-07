<?php
namespace App\Models;

use CodeIgniter\Model;

class dataModel extends Model{
    function getSource(){
        $source = array (
            array (
                'name' => 'paijo',
                'email' => 'paijo@gmail.com',
                'status' => 'active',
                'regdate'=> '2022-09-01'
            ),
            array (
                'name' => 'Inem',
                'email' => 'Inem@gmail.com',
                'status' => 'active',
                'regdate'=> '2022-08-01'
                )
        );
        return $source;
    }
}
?>