<?php
//Conexao
require_once './conexao.php';

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['tel']);

    $sql = "UPDATE usuario(nome, email, telefone)VALUES('$nome', '$email', '$telefone')";


    if(mysqli_query($connect, $sql)){
        mysqli_close($connect);
        header('Location: ../pages/index.php?sucesso');
    }else{
        mysqli_close($connect);
        header('Location: ../pages/index.php?erro');
    }
}

?>