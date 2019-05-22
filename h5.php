<?php require "head.php"; ?>

<div class="content">
<br>
<h2>Harjoitus 5</h2>
<h3> Koearvosana </h3>
<form action="h5.php" method="get">
    Valitse kokeen arvosana: <input type="number" name="luku" min="1" max="3">
    <input type="submit" value="Lähetä">
</form>
<br>

<?php 

if(isset($_GET['luku'])){
    $luku = $_GET['luku'];
    $number = rand(1,10);
    if ($number== $luku) {
        echo "LUVUT ON SAMAT JEE!! lukusi oli $luku ja arvottu luku oli $number.";
    } else {
        echo "ei osunut :(( ):: lukusi oli $luku ja arvottu luku oli $number.";
    }
}
?>


</div>
<?php require "footer.php"; ?>
