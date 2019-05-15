<?php require "head.php"; ?>

<div class="content">
<br>
<h2>Harjoitus 1</h2>


<p>

    <h3> Kuinka paljon saan bensaa? </h3>
    <form action="h1.php" method="get">
    Anna rahamäärä: <input type="number" name="bensa"> 
    <input type="submit" value="Lähetä">
    </form>
</p>

<?php
    if(isset($_GET['bensa'])){
        echo "Saat bensaa " . $_GET['bensa'] / 1.55 . " litraa" ;
}
?>

<br><br>


</div>

<?php require "footer.php"; ?>