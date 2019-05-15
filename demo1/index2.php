<!DOCTYPE html>
<html lang="fi">
<head>

<title>PHP</title>
<link rel="stylesheet" href="oma.css" type="text/css">
</head>

<body>

<?php
$otsikko = "tervetuloa sivulleni" . htmlspecialchars($_GET['name']);
?>

<h1>
   <?=$otsikko ?>
</h1>

<p>
    <?php  
    $name = "Tampere";
    echo "Hello $name";
    $vappulaskuri = 7;?>
    <br>
    <?= "Vappuun on: \n" . $vappulaskuri . "päivää!!!! \n";?>  <br>
    <?= "How are you $name"?>
</p>

</body>
</html>