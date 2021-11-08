<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="prak5.css" />
    <title>Tugas 5 Pratikum WEB RC</title>
</head>
<body>
    <div class="container">
        <header>
            <table>
            <td class="atas">
                <img
                class="logo"
                src="ITERA.png"
                alt="ITERA"
                />
            </td>
            <td class="atass">Institut Teknologi Sumatera</td>
            </table>
        </header>

        <nav>
            <ul>
            <li><a href="Tugas1prak5.php">Tugas1</a></li>
            <li><a href="Tugas2prak5.php">Tugas2</a></li>
            <li><a href="Tugas3prak5.php">Tugas3</a></li>
            </ul>
        </nav>
    <div>

    <form action="" method="POST">
        <br>
        <label>Daftar kata : <br></label>
        <label> ("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat")</label> 
        <br><br>
        <label> Tambah kata  : </label>
        <br>
        <input type="text" name="katabaru1" id="katabaru1" placeholder="kata baru 1">
        <br>
        <input type="text" name="katabaru2" id="katabaru2" placeholder="kata baru 2"> 
        <br>
        <input type="text" name="katabaru3" id="katabaru3" placeholder="kata baru 3"> 
        <br>
        <br>
        <input type="submit" name="submit" id="submit"/>
    </form>


</body>
</html>

<?php
if(isset($_POST['submit']))
    {
        $katabaru1=$_POST['katabaru1'];
        $katabaru2=$_POST['katabaru2'];
        $katabaru3=$_POST['katabaru3'];
        function Pengurutan(&$arraykata){
            sort($arraykata);
        }


        $listKata = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", $katabaru1, $katabaru2, $katabaru3);
        echo "<br><br> <div class='hasil'> Daftar kata Sebelum Diurutkan : <br>";
        $i = 0;
        foreach($listKata as $list){
            if($i < count($listKata)-1){
                echo $list.", ";
            }else{
                echo $list;
            }
            $i++;
        }

        echo "<br><br> Daftar kata Setelah Diurutkan : <br>";
        
        Pengurutan($listKata);

        $i = 0;
        foreach($listKata as $list){
            if($i < count($listKata)-1){
                echo $list.", ";
            }else{
                echo $list;
            }
            $i++;
        }

        echo "</div>";
    }
?>