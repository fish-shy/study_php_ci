<?php
  $session = session();
  $session->start();
  if($session->has('logged_in')){
    echo "anda sudah login , ". session()->get('username');
    echo "<br/>";
    echo '<a href="'.site_url('belajarlibrary/logout').'"name="logout" >Logout</a>';
  }
  else{
    echo 'anda belum login';
    echo "<br/>";
    echo '<a href="'.site_url('belajarlibrary/login').'"name="login" >Login</a>';
    }
?>