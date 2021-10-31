<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tugas4.css">
    <title>Document</title>
</head>
<body>
    <?php include "database.php"; 
      $ubah =$sambung->query("select * from mahasiswa where nim='".$_GET['NIM']."'"); 
      while ($bebas = $ubah -> fetch_object()){
          $NAMA = $bebas -> NAMA;
          $PRODI = $bebas -> PRODI;
          $ANGKATAN = $bebas -> ANGKATAN;
      }
      $NIM = $_GET['NIM'];
    
    ?>

    <form onsubmit="kliksimpan(); return false;" id="form" >
        <table>
            <tr>
                <td>NIM : </td>
                <td><input type="text" name="NIM" value ='<?php echo $NIM ?> '></td>
            </tr>

            <tr>
                <td>Nama : </td>
                <td><input type="text" name="NAMA" value ='<?php echo $NAMA ?> '></td>
            </tr>

            <tr>
                <td>Prodi : </td>
                <td><input type="text" name="PRODI" value ='<?php echo $PRODI ?> '></td>
            </tr>

            <tr>
                <td>Angkatan : </td>
                <td><input type="text" name="ANGKATAN" value ='<?php echo $ANGKATAN ?> ' ></td>
            </tr>
        </table>

        <button type="submit" > Submit </button>
    </form>
      
    <script>
        function kliksimpan(){
            $.ajax({
                type: "POST",
                url: "update.php",
                data: $("#form").serialize(),
                success: function(data) {
                    Kliklihat();
                },
                error: function() {
                    alert('error handling here');
                }
            });
        }
    </script>

</body>
</html>