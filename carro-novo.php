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
    <main class="container">
        <form action="carros-salvar.php" method="post">
            <label>nome<input name="nome"></label>
            <label> data<input name="data_nacimento"></label>
            <label> cpf<input name="cpf"></label> 
             <label> cidade<input name="cidade"></label>
             <label> Veicolo<input name="veicolo"></label>
             <label> cor<input name="cor"></label>


           

            <button type="subimt">SALVAR</button>
        </form>
    </main>


    <?php
    include "rodape.php"
        ?>
</body>

</html>