<?php
    $servername ="localhost";
    $username  = "root";
    $password = "";
    $dbname ="project_tkrw";

    $koneksi = mysqli_connect($servername, $username, $password, $dbname);

    if(!$koneksi){
        die("connection failed " . mysqli_connect_error());
    }else{
        echo "koneksi berhasil";
    }
?>

