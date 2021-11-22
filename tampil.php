<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cssindex.css">
    <title>Document</title>
</head>
<body style="overflow-y='hidden'">
<table class="table table-bordered">
    <thead class="thead-dark " >
        <tr>
        <th scope="col">NIM</th>
        <th scope="col">NAMA</th>
        <th scope="col">Prodi</th>
        <th scope="col">Angkatan</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
        </tr>
    </thead>

    <button type="button" class="btn btn-dark">
        <a href="javascript:void()" onclick="Kliktambah()">Create New</a>
    </button>

    <?php
    include "database.php";
    $hasil = mysqli_query($sambung, "select * from mahasiswa order by nim asc ");
    while ($data = mysqli_fetch_array($hasil)):
    ?>
    <tr>
        <td><?php echo $data['NIM'];?></td>
        <td><?php echo $data['NAMA'];?></td>
        <td><?php echo $data['PRODI'];?></td>
        <td><?php echo $data['ANGKATAN'];?></td>
        <td><a href="javascript:void()" onclick="Klikdelete('<?php echo $data['NIM'];?>')" >Delete</a></td>
        <td><a href="javascript:void()" onclick="Klikupdate('<?php echo $data['NIM'];?>')" >Update</a></td>
    </tr>
    <?php 
    endwhile; 
    ?>
</table>

<script>

    function Kliktambah(){
            $.get("FormInsert.php" , function(data){
                $("#content").html(data);

            });
        }

    function Kliklihat(){
        $.get("tampil.php" , function(data){
            $("#content").html(data);
        });
    }

    function Klikdelete(NIM){
        $.get("delete.php" ,{NIM:NIM}, function(data){
            Kliklihat();

        });
    }
        
    function Klikupdate(NIM){
        $.get("FormUpdate.php" ,{NIM:NIM}, function(data){
            $("#content").html(data);
        }); 
    }
</script>
</body>
</html>

