<?php
    include 'database.php';
    $nim=$_POST["NIM"];
    $nama=$_POST["NAMA"];
    $prodi=$_POST["PRODI"];
    $angkatan=$_POST["ANGKATAN"];

    $sambung->query("insert into mahasiswa (NIM,NAMA,PRODI,ANGKATAN) values ('$nim','$nama','$prodi','$angkatan')");
    header('location:tampil.php');    
?>

