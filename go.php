<?php
$count = $_GET['count'];
$i = 1;

require_once 'Nations.php';
require_once 'Tabs.php';
require_once 'Random.php';

$random = new Random($count);
$resultArr = $random->getRandom();

$nations = new Nations();
$nationsFull = $nations->getArrNations();

$tabs = new Tabs();
$tabsFull = $tabs->getArrTabs();

foreach ($resultArr as $result) {
	foreach ($result as $value => $key) {
		if ($key != null and $value != null) {
		} else {
			$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			header("Location: $url");
		}
	}
}

$image = rand(1, 6);
$buildingTextArr = [
	1 => 'Количество территорий с тунелями, соседствующими с вашими зданиями. Каждый тунель учитывается только 1 раз.',
	2 => 'Количество озер, соседствующих с вашими зданиями. Каждое озеро учитывается только 1 раз.',
	3 => 'Количество территорий с символами приключений, соседствующих с вашими зданиями. Каждое приключение учитывается только 1 раз.',
	4 => 'Количество территорий с тунелями и вашими зданиями.',
	5 => 'Количество ваших зданий, построенных в один ряд. Учитывается только самый длинный ряд',
	6 => 'Количество тундр и ферм с вашими зданиями'
];
$buildingText = $buildingTextArr[$image];

$nationIconArr = [
	1 => "<img src='images/icons/nations/star.png' width='20' height='20'>",
	2 => "<img src='images/icons/nations/bow.png' width='20' height='20'>",
	3 => "<img src='images/icons/nations/lion.png' width='20' height='20'>",
	4 => "<img src='images/icons/nations/wolf.png' width='20' height='20'>",
	5 => "<img src='images/icons/nations/north.png' width='20' height='20'>"
];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Серп</title>
    <style>
        body {
            background: url(images/3.jpeg);
        }
    </style>
</head>
<body>

            <div class="row">
                <a href="count.php" class="btn btn-dark btn-lg btn-block" role="button" aria-disabled="true">Поменять кол-во игроков</a>
            </div>

            <div class="row">
                <a href="go.php?count=<?php echo $count; ?>" class="btn btn-danger btn-lg btn-block" role="button" aria-disabled="true">Генерировать заново</a>
            </div>

            <div class="alert alert-danger" role="alert">
                <div class="text-center">
                    <img src="/images/building/<?= $image ?>.png" class="rounded" width="300" height="200">
                </div>
                <div class="text-center">
				<?php echo $buildingText; ?>
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

foreach ($resultArr as $result){
    foreach ($result as $key => $value){
		$resultNation = $nationsFull[$key];
		$resultTab = $tabsFull[$value];
		$nationIcon = $nationIconArr[$key]?>
        <tr>
            <th scope="row"><?php echo "Игрок $i"; ?></th>
            <td><?php echo $nationIcon . ' '. $resultNation; ?></td>
            <td><?php echo $resultTab; ?></td>
        </tr>
        <?php
        $i++;
    }
}

?>
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>
