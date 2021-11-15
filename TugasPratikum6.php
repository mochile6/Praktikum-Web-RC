<?php

    class ListBuah{
        var $nama;
        var $banyak;

        public function __construct($nama , $banyak){
            $this->nama = $nama;
            $this->banyak = $banyak;
        }

        public function getBanyak(){
            return $this->banyak;
        }
    }

    class Mangga extends ListBuah{
        var $harga;
        var $totalPrice;
        var $totalbelanja;

        public function __construct($banyak){
            parent::__construct("Mangga" , $banyak);
            $this->harga = 15000 ;
            $this->totalPrice = $this->harga * $banyak;
            $this->totalbelanja += $this->totalPrice;
        }

        public function info(){
            echo " {$this->nama}  sebanyak   {$this->banyak}  dengan harga {$this->harga} total  {$this->totalPrice} ";
        }
    }
    

    class Salak extends ListBuah{
        var $harga;
        var $totalPrice;
        var $totalbelanja;

        public function __construct($banyak){
            parent::__construct("Mangga" , $banyak);
            $this->harga = 10000 ;
            $this->totalPrice = $this->harga * $banyak;
            $this->totalbelanja += $this->totalPrice;
        }

        public function info(){
            echo " {$this->nama}  sebanyak   {$this->banyak}  dengan harga {$this->harga} total  {$this->totalPrice} ";
        }
    }

    class Jambu extends ListBuah{
        var $harga;
        var $totalPrice;
        var $totalbelanja;

        public function __construct($banyak){
            parent::__construct("Mangga" , $banyak);
            $this->harga = 13000 ;
            $this->totalPrice = $this->harga * $banyak;
            $this->totalbelanja += $this->totalPrice;
        }

        public function info(){
            echo " {$this->nama}  sebanyak   {$this->banyak}  dengan harga {$this->harga} total  {$this->totalPrice} ";
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="prak6.css" />
    <title>Document</title>
    
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
            <li><a href="">Toko</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            </ul>
        </nav>
    <div>    

    <div class="Biodata">
    <form method="POST" action="" onclick=Inputdata()>
        <table class="tabeldiri" >
            <th>TOKO BELANJA</th>
            <tr>
                <td>Buah</td>
                <td>Harga / Kg</td>
                <td>Jumlah / Kg</td>
            </tr>
            <tr>
                <td>Mangga</td>
                <td>Rp 15.000</td>
                <td><input id="mangga" type="number" name="mangga" value="0" min="0" required></td>
            </tr>
            <tr>
                <td>Jambu</td>
                <td>Rp 13.000</td>
                <td><input id="jambu" type="number" name="jambu" value="0" min="0" required></td>
            </tr>
            <tr>
                <td>Salak</td>
                <td>Rp 10.000</td>
                <td><input id="salak" type="number" name="salak" value="0" min="0" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" onclick=Inputdata()>submit</button></td>
            </tr>
        </table>
        <div>
    </form>

    <div id="kalimatuntukuser">
        <p></p>
    </div>

        <?php
        if(isset($_POST['submit'])){
        $mangga=$_POST['mangga'];
        $jambu=$_POST['jambu'];
        $salak=$_POST['salak'];

        $item1 = new Mangga($mangga);
        echo "<br> {$item1->info()} ";
        $item2 = new Jambu($jambu);
        echo "<br> {$item2->info()} ";
        $item3 = new Salak($salak);
        echo "<br> {$item3->info()} ";
        $totalbuahh = $item1->getBanyak() + $item2->getBanyak() + $item3->getBanyak();
                echo "<br>TOTAL Buah : {$totalbuahh} ";
        $totalhargaa = $item1->getBanyak()*15000 + $item2->getBanyak()*13000 + $item3->getBanyak()*10000;
                echo "<br>TOTAL HARGA : {$totalhargaa} ";
        }
        ?>

        <script>
                function inputdata{
                var Manggaa = document.getElementById("jambu").value;
                var Jambuu = document.getElementById("jambu").value;
                var Salakk = document.getElementById("salak").value;

                let totalbuahh = Manggaa  + Jambuu + Salakk;
                isinya = "<p> Total Buah : " + totalBuah + "</p>";
                let totalhargaa = Manggaa + Jambuu + Salakk;
                isinya = "<p> Total Harga : " + totalBuah + "</p>";

                var isi = document.getElementByID("kalimatuntukuser");
                isi.innerHTML = isinya;
                
                }
        </script>
</body>
</html>