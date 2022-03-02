<?php
    $servername ="localhost";
    $username  = "root";
    $password = "";
    $dbname ="project_tkrw";

    $conn = mysqli_connect($servername, $username, $password, $project_tkrw);

    if(!$conn){
        die("connection failed " . mysqli_connect_error());
    }else{
        echo "koneksi berhasil";
    }
?>

