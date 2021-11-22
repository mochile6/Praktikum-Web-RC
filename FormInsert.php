<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cssindex.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tugas Pratikum RC 7 </title>
</head>
<body>
    <div class="col-lg-5">  
    <form onsubmit="klikmasukan(); return false;" id="form" >

        <div class="form-group">
            <label for="formGroupExampleInput">NIM</label>
            <input type="text" class="form-control"  name="NIM">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Nama</label>
            <input type="text" class="form-control" name="NAMA">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Prodi</label>
            <input type="text" class="form-control"  name="PRODI">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Angkatan</label>
            <input type="text" class="form-control" name="ANGKATAN">
        </div>

        <button type="submit"> Submit </button>
    </form>
    </div>  
</body>
<script>
        function klikmasukan(){
            $.ajax({
                type: "POST",
                url: "insert.php",
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

</html>