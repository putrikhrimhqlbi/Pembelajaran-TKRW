<?php

    
    $judul_arsip=$_POST['judul_arsip'];
    $arsip_kelas=$_POST['arsip_kelas'];
    $tahun=$_POST['tahun'];

        include 'koneksi.php';

$sql = "INSERT INTO arsip_sch VALUES ('$judul_arsip','$arsip_kelas','$tahun')";

if (mysqli_query ($koneksi,$sql)){
    echo "Data Berhasil Disimpan";
    echo "<br>";
    echo "<a href='lihatarsip.php'>LIHAT DATA<a/>";
    
}else{
    echo "Eror:".$sql."<br>".mysqli_error($koneksi);

}

?>