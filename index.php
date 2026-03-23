<?php

echo "Olá mundo";

include("conexao.php");
$sql = "SELECT * FROM produtos ORDER BY id Desc";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SYS BRAIA</title>
    </head>
    <body>
        <h1>Cadastro</h1>
    </body>
</html>
