<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tugas4.css">
    <title>Tugas Pratikum RC 4 </title>
</head>
<body>
    <form onsubmit="klikmasukan(); return false;" id="form" >
        <table>
            <tr>
                <td>NIM : </td>
                <td><input type="text" name="NIM" ></td>
            </tr>

            <tr>
                <td>Nama : </td>
                <td><input type="text" name="NAMA" ></td>
            </tr>

            <tr>
                <td>Prodi : </td>
                <td><input type="text" name="PRODI" ></td>
            </tr>

            <tr>
                <td>Angkatan : </td>
                <td><input type="text" name="ANGKATAN"></td>
            </tr>
        </table>

        <button type="submit"> Submit </button>
    </form>
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