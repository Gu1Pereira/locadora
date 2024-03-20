<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar.php" method="post"> 
        <input name="usuario" placeholder="informe seu usuario">
        <input name="email" placeholder="seu email">
        <button>Salvar</button>
     </form>
     <?php
     $mensagem = $_GET["mensagem"] ?? "" ; 
     if($mensagem == "ok"){
        echo "<h3>Cadastro realizado com sucesso</h3>";
     }else{
        echo "bem vindo há pagina";
     }
     ?>
</body>
</html>