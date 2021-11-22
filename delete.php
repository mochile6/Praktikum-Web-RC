<?php
    include 'database.php';
    $sambung->query("delete from mahasiswa where nim='".$_GET['NIM']."'  "); 
?>

