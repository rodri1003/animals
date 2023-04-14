<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Page Kids</title>
    <style>
        .box{
            display:inline-block;
            text-align:center;
            margin-left: 120px;
            margin-bottom:90px;
        }
    </style>
    <script src="script.js"></script>
</head>
<body>
    <!--Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./img/PACKGET.png" width="30" height="30" class="d-inline-block align-top" alt="">
            PegeKids
        </a>
    </nav>
    <div class="jumbotron">
    <form action="index.php" method="POST">
        <div class="box">
            <div class="card" style="width: 16rem; height:14rem;">
                <img class="card-img-top" src="./img/gato.jpg" alt="Card image cap" style="width: 15rem; height:13rem;">
                <div class="card-body">
                    <h5 class="card-title">Gato</h5>
                    <input type="submit" class="btn btn-primary" name="gato" value="Reproducir">
                </div>
            </div>
        </div>

        <div class="box">
            <div class="card" style="width: 16rem; height:14rem;">
                <img class="card-img-top" src="./img/perro.jpg" alt="Card image cap" style="width: 15rem; height:13rem;">
                <div class="card-body">
                    <h5 class="card-title">Perro</h5>
                    <input type="submit" class="btn btn-primary" name="perro" value="Reproducir">
                </div>
            </div>
        </div>

        <div class="box">
            <div class="card" style="width: 16rem; height:14rem;">
                <img class="card-img-top" src="./img/vaca.jpg" alt="Card image cap" style="width: 15rem; height:13rem;">
                <div class="card-body">
                    <h5 class="card-title">Vaca</h5>
                    <input type="submit" class="btn btn-primary" name="vaca" value="Reproducir">
                </div>
            </div>
        </div>

        <div class="box">
            <div class="card" style="width: 16rem; height:14rem;">
                <img class="card-img-top" src="./img/Abecedario.jpg" alt="Card image cap" style="width: 15rem; height:13rem;">
                <div class="card-body">
                    <h5 class="card-title">Abecedario</h5>
                    <input type="submit" class="btn btn-primary" name="abecedario" value ="Reproducir">
            </div>
        </div>
    </div>
</form> 
</body>
</html>
<?php
include_once('animales.php');
?>