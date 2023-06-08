<?php
$nome = $_POST["nome"];
$data_nacimento = $_POST["data_nacimento"];
$cpf = $_POST["cpf"];
$cidade = $_POST["cidade"];
$veicolo = $_POST["veicolo"];
$veicor = $_POST["cor"];



$bd_usuario = "root";
$bd_senha = "";
$bd_nome_banco = "bd_carro";
$bd_servidor = "localhost";

$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_nome_banco);

$sql = "insert into t_carros (nome,data_nacimento,cpf,cidade) values('$nome','$data_nacimento','$cpf','$cidade')";

mysqli_query($conexao,$sql);

mysqli_close($conexao);

header('location:carros.php');
?>

