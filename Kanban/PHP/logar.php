<?php

    session_start();
    include_once "bd.php";

    $email = ($_POST['email']) ?  $_POST['email'] : '';
    $senha = ($_POST['senha']) ?  $_POST['senha'] : '';
    $senha = openssl_encrypt ($senha, "AES-256-CBC", "kanban",);

    $sql ="SELECT id, nome FROM usuarios WHERE email = :email AND senha = :senha";
    $resultado = $bd->prepare($sql);
    $resultado->bindParam(':email', $email);
    $resultado->bindParam(':senha', $senha);
    $resultado->execute();
    $registros = $resultado->fetchAll(); 

    if(count($registros)==1){
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $registros[0]['nome'];
        $_SESSION['id'] = $registros[0]['id'];
        header('location: ../index.php');
        exit;
    }else{
        header('location: ../login.php');
        exit;
    }
?>