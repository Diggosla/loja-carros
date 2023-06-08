<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include "cabecalho.php"
        ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2 class="display-6 text-center mt-4 mt-3">Cadastro de Carros</h2>
            </div>
        </div>
        <div class="row text-center">

            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="carros.php" class="btn">
                    <img src="img/carrinho.png" width="120px">
                    <br>
                    <strong>CARROS</strong>
                </a>
            </div>
            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="#" class="btn">
                    <img src="img/clientes.png">
                    <br>
                    <strong>CLIENTES</strong>
                </a>
            </div>
            <div class="col m-5 border rounded pt-3 pb-3">
                <a href="#" class="btn">
                    <img src="img/modelo.png" width="120px">
                    <br>
                    <strong>MODELOS</strong>
                </a>
            </div>

        </div>

    </div>

    <?php
    include "rodape.php"
        ?>

</body>

</html>