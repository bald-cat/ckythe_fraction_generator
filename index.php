<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Привет мир!</title>
    <style>
        body {
            background: url(images/1.jpeg);
        }
    </style>
</head>
<body>

<?php if(!isset($_GET['play'])){ ?>
    <div class="fixed-bottom">
        <div class="p-3 mb-2 bg-dark text-white">
            <div class="container d-flex h-100">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <h2>Собираешься играть в "Серп"?</h2>
                        </div>
                        <div class="col">
                            <a href="?play=no" class="list-group-item list-group-item-action" aria-current="true"><b>Дааааааааааааааааааа!</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php } ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>