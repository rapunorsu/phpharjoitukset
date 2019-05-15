<?php require "head.php"; ?>

<div class="content">
<br>
<h2>Harjoitus 3</h2>
<h3> Alvin laskenta </h3>
<form action="h3.php" method="get">
    Anna hinta: <input type="number" name="hinta">
    Anna alv%: <input type="number" name="prosentti">
    <input type="submit" value="Lähetä">
</form>
<br>


<?php 

function alvinlasku($hinta, $prosentti){
    $alv = ($prosentti / 100)*$hinta;
    $verollinen = $hinta + $alv;
     echo "Arvonlisävero on  $alv  euroa.";
     echo " Verollinen hinta on  $verollinen  euroa.";
}

if(isset($_GET['hinta'], $_GET['prosentti'])){
    $hinta = $_GET['hinta'];
    $prosentti = $_GET['prosentti'];
    alvinlasku($hinta, $prosentti);
 }
 
   
?>
<br><br>
</div>

<?php require "footer.php"; ?>