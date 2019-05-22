<?php require "head.php"; ?>

<div class="content">
<br>

<h2>Harjoitus 7</h2>

<?php 
$task = [
    'tehtävä' => "Osta piimää",
    'deadline' => "1.6.2019",
    'vastuuhenkilö' => "Spede",
    'valmis' => true
];

$task2 = [
    'tehtävä' => "Juo paljon kaljaa",
    'deadline' => "1.7.2019",
    'vastuuhenkilö' => "Koira",
    'valmis' => false
];

$task3 = [
    'tehtävä' => "Sääli Jesseä",
    'deadline' => "1.9.2019",
    'vastuuhenkilö' => "Kissa",
    'valmis' => false
];

$tasks = [$task, $task2, $task3]; 
foreach ($tasks as $task): ?>
<ul>
    <li>
        <?= "Tehtävä: " . $task["tehtävä"] ?>
    </li>
    <li>
        <?= "Valmis: " . $task["valmis"] ? "valmis" : "kesken" ?>
    </li>
</ul>
<?php endforeach ?>


<?php foreach ($tasks as $task): ?>
<ul>
    <?php 
        foreach ($task as $key => $value){
            if ($key=== "valmis" ){
           echo "<li>" .ucwords($key) . ":" . ($value ? "valmis" : "kesken") . "</li>";
            } else {
                echo "<li>" .ucwords($key) . ": $value </li>";
        }
    }
    ?>
</ul>
<?php endforeach ?>


<?php

    // echo "<pre>";
    // print_r($task);
    // echo "</pre>";
?>


</div>
<br>
<?php require "footer.php"; ?>