<?php
    $nama =[
        'name' => 'nama',
        'placeholder' => 'masukkan nama anda',
    ];
        
    $opsi =[
        'sma' => 'sekolah menengah atas',
        's1' => 'strata I',
    ];

    echo form_open();
    echo'Nama : ';
    echo form_input($nama);
    echo "<br/>";
    echo 'pendidikan : ';
    echo form_dropdown("", $opsi,"");

?>