<?php
//conexao com o banco de dados
$server = "localhost";
$username = "root";
$senha = "";
$db_nome = "base";

$connect = mysqli_connect($server, $username, $senha, $db_nome);

if(mysqli_connect_error()):
    echo "Erro na conexao". mysqli_connect_error();
endif;

?>