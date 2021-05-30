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
<div class="alert alert-danger" role="alert">
    Закрепите за каждым игроком порядковый номер, от 1 до количества игроков! Делать функционал для вписывания имен было леньки :)
    Да и вам потом будет леньки каждый раз их вписывать!
</div>
        <div class="fixed-bottom">
            <div class="p-3 mb-2 bg-secondary text-white">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-9">
                            <h2>Сколько человек будет играть?</h2>
                        </div>

                        <div class="col-sm-3">
                        <a href="input.php?count=1" class="btn btn-primary btn-lg" role="button" aria-disabled="true">1</a>
                        <a href="input.php?count=2" class="btn btn-danger btn-lg" role="button" aria-disabled="true">2</a>
                        <a href="input.php?count=3" class="btn btn-warning btn-lg" role="button" aria-disabled="true">3</a>
                        <a href="input.php?count=4" class="btn btn-dark btn-lg" role="button" aria-disabled="true">4</a>
                        <a href="input.php?count=5" class="btn btn-light btn-lg" role="button" aria-disabled="true">5</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>