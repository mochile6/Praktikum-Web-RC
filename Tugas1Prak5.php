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
        <label for="bilangan1">Masukkan Bilangan Pertama</label>
        <input type="number" name="bilangan1" id="bilangan1" >
        <br>
        <label for="bilangan2">Masukkan Bilangan Kedua</label>
        <input type="number" name="bilangan2" id="bilangan2" >
        <input type="submit" name="submit"    id="submit">
        <br><br>
    </form>


</body>
</html>

<?php 
    function Perhitungan($operator , $a , $b){
        $hasil = 0;

        if($operator=='+'){
            $hasil = $a + $b;
            echo "PENJUMLAHAN <br>";
            echo "Operator : + <br>";
            echo "Hasil : $hasil";
            echo "<br><br>";
            
        }
        elseif($operator=='-'){
            $hasil = $a - $b;
            echo "PENGURANGAN <br>";
            echo "Operator : - <br>";
            echo "Hasil : $hasil";
            echo "<br><br>";
        }

        elseif($operator=='*'){
            $hasil = $a * $b;
            echo "Perkalian <br>";
            echo "Operator : - <br>";
            echo "Hasil : $hasil";
            echo "<br><br>";
        }

        elseif($operator=='/'){
            $hasil = $a / $b;
            echo "Pembagian <br>";
            echo "Operator : - <br>";
            echo "Hasil : $hasil";
            echo "<br><br>";
        }

        elseif($operator=='%'){
            $hasil = $a % $b;
            echo "Modulo <br>";
            echo "Operator : - <br>";
            echo "Hasil : $hasil";
            echo "<br><br>";
        }

    }

    if (isset($_POST['submit'])){
        $operator = ['+', '-', '*', '/','%'];
		$angka1 = $_POST['bilangan1'];
		$angka2 = $_POST['bilangan2'];

        for ($i=0; $i <5 ; $i++) { 
			if($operator[$i] == '+'){
                $Penjumlahan =Perhitungan($operator[$i],$angka1, $angka2);
            }
			elseif($operator[$i] == '-'){
                $pengurangan =Perhitungan($operator[$i],$angka1, $angka2);
            }
			elseif($operator[$i] == '*'){
                $perkalian =Perhitungan($operator[$i],$angka1, $angka2);
            }
			elseif($operator[$i] == '/'){
                $pembagian =Perhitungan($operator[$i],$angka1, $angka2);
            }
			elseif($operator[$i] == '%'){
                $modulus = Perhitungan($operator[$i],$angka1, $angka2);
            }
		}
    }


?> 