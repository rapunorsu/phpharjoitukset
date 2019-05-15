<?php require "head.php"; ?>

<div class="content">
<br>
<h2>Harjoitus 4</h2>
<h3> Arpa </h3>
<form action="h4.php" method="get">
    Anna luku väliltä 1-10: <input type="number" name="luku" min="1" max="10">
    <input type="submit" value="Lähetä">
</form>
<br>


<?php 

if(isset($_GET['luku'])){
    $luku = $_GET['luku'];
    $number = rand(1,10);
    if ($number== $luku) {
        echo "LUVUT ON SAMAT JEE!! lukusi oli $luku ja arvottu $number.";
    } else {
        echo "ei osunut :(( ):: lukusi oli $luku ja arvottu $number.";
    }
}
?>

<br><br>
</div>

<?php require "footer.php"; ?>