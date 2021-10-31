<link rel="stylesheet" type="text/css" href="tugas4.css">

<table>
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>PRODI</th>
        <th>ANGKATAN</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

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