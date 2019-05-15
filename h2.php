<?php require "head.php"; ?>

<div class="content">
<br>
<h2>Harjoitus 2</h2>
<h3> Rahaa takaisin </h3>
<form action="h2.php" method="get">
    Anna rahamäärä: <input type="number" name="raha">
    Anna loppusumma: <input type="number" name="summa">
    <input type="submit" value="Lähetä">
</form>
<br>


<?php 

function rahanpalautus($raha, $summa){
    $palautus = $raha - $summa;
    if ($palautus >= 0) {
        echo "saat takaisin " . $palautus . " euroa";
    } else {
        echo "anna lisää rahaa";
    }
}

if(isset($_GET['raha']) && $_GET['summa']){
   $raha = $_GET['raha'];
   $summa = $_GET['summa'];
   echo rahanpalautus($raha, $summa);
}

?>
<br>
</div>

<?php require "footer.php"; ?>