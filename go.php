<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Серп без молота :(</title>
    <style>
        body {
            background: url(images/3.jpeg);
        }
    </style>
</head>
<body>
<?php

require_once 'Nations.php';
require_once 'Tabs.php';
require_once 'Random.php';

$count = $_GET['count'];


?>
<div class="fixed-top">

        <div class="row">
                <a href="count.php" class="btn btn-dark btn-lg btn-block" role="button" aria-disabled="true">Поменять кол-во игроков</a>
        </div>

            <div class="row">
                <a href="go.php?count=<?php echo $count; ?>" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">Генерировать заново</a>
            </div>




</div>

<div class="fixed-bottom">
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Игрок</th>
        <th scope="col">Фракция</th>
        <th scope="col">Планшет</th>
    </tr>
    </thead>
    <tbody>
<?php
$i = 1;

$random = new Random($count);
$resultArr = $random->getRandom();

$nations = new Nations($count);
$nationsFull = $nations->getArrNations();

$tabs = new Tabs($count);
$tabsFull = $tabs->getArrTabs();

foreach ($resultArr as $result){
    foreach ($result as $key => $value){
		$resultNation = $nationsFull[$key];
		$resultTab = $tabsFull[$value]; ?>
        <tr>
            <th scope="row"><?php echo "Игрок $i"; ?></th>
            <td><?php echo $resultNation; ?></td>
            <td><?php echo $resultTab; ?></td>
        </tr>
        <?php
        $i++;
    }
}?>
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>