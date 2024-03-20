<?php

$nome = $_POST["nome"];
$email = $_POST["email"];


echo $nome;
echo $email;


$arquivo = fopen("veiculos.csv","a");
fwrite($arquivo,$nome.";".$email.";". "\n");
fclose($arquivo);

header('location:cadastrar.php?mensagem=ok');
?>