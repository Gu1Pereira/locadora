<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$veiculo = $_POST["veiculo"];

echo $nome;
echo $email;
echo $veiculo;

$arquivo = fopen("veiculos.csv", "a");
fwrite($arquivo, $nome . ";" . $email . ";" . $veiculo . "\n");
fclose($arquivo);

header("location:index.php")
?>