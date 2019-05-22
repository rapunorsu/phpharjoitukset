<?php require "head.php"; ?>

<div class="content">
<br>

<h2>Harjoitus 6</h2>

<?php 
$task = [
    'tehtävä' => "Osta piimää",
    'deadline' => "1.6.2019",
    'vastuuhenkilö' => "Spede",
    'valmis' => true
]
?>

<ul>
    <li class="bullet">
    <?= "Tehtävä: " . $task["tehtävä"] ?> </li>
    

    <li class="bullet">
    <?= "Valmis: " . ($task["valmis"] ? "valmis" : "kesken") ?> </li>

</ul>


</div>
<br>
<?php require "footer.php"; ?>
