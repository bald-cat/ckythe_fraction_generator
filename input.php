<?php
if(empty($_GET)){
	header('Location: index.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Серп</title>
    <style>
        body {
            background: url(images/2.jpeg);
        }
    </style>
</head>
<body>
<?php
    $count = $_GET['count'];
?>
<div class="alert alert-danger" role="alert">
    Впишите имена игроков в поля.
</div>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form action="go.php" method="get">
				<?php
				for($i = 0; $i < $count; $i++){ ?>
                    <div class="form-group>">
                        <p></p>
                        <input type="text" class="form-control" name="name[]">
                        <p></p>
                    </div>
				<?php } ?>
                <p></p>
                <input type="hidden" name="count" value="<?php echo $count; ?>">
                <p></p>
                <button type="submit" class="form-control btn-primary">Генерировать</button>
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>