<?php
    include 'database.php';
    $sambung->query("Update mahasiswa set NIM='".$_POST['NIM']."',NAMA='".$_POST['NAMA']."',PRODI='".$_POST['PRODI']."',ANGKATAN='".$_POST['ANGKATAN']."' where NIM='".$_POST['NIM']."' ");
      
?>

