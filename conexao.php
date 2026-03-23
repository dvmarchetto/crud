<?php

/*Variaveis de conexão com o banco de dados*/
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_produtos";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Erro ao conectar ao banco de dados");

if(!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

?>
