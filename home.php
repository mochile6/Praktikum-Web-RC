<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.5.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="overflow-y:hidden">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <div id="content" >
    <div class="jumbotron jumbotron-fluid" style="height:650px">
        <div class="container">
          <h1 class="display-4">Mochile Database</h1>
          <p class="lead">Selamat Datang Di Mochile Database Fitur Fitur CRUD Mahasiswa Tersedia</p>
        </div>
    </div>
    </div> 

    <br>
    <br>

    <footer class="bg-light text-center text-lg-start fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-dark" href="">Fahri Setiawan</a>
        </div>
        <!-- Copyright -->
    </footer>
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
    </script>
</body>
</html>