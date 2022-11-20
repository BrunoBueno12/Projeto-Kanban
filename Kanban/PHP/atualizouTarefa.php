<?php
    include_once "bd.php";
    
    session_start();

    $tituloC =isset ($_POST['tituloC']) ?  $_POST['tituloC'] : '';
    $cod = isset($_POST['cod']) ?  $_POST['cod'] : '';
    $descricaoC = isset($_POST['descricaoC']) ?  $_POST['descricaoC'] : '';
    $responsavelC = isset($_POST['responsavelC']) ?  $_POST['responsavelC'] : '';

    
    $sql = "UPDATE tarefas SET titulo = :tituloC, descricao = :descricaoC, responsavel = :responsavelC
    WHERE id = :cod";
        $resultado = $bd->prepare($sql);
        $resultado->bindParam(':tituloC', $tituloC);
        $resultado->bindParam(':descricaoC', $descricaoC);
        $resultado->bindParam(':responsavelC', $responsavelC);
        $resultado->bindParam(':cod', $cod);
        $registro = $resultado->execute();
        header('location: ../index.php');
        exit;
?>