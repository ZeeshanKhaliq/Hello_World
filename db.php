<?php

 $server='localhost';
 $user='root';
 $password='';
 $database='db';

    $connection=mysqli_connect($server,$user,$password,$database='db');
     if (!$connection) {
     die ("Connection Failed". mysqli_connect_error() );
     }
    

?>
