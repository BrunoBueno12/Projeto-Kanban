<?php
    include_once "bd.php";
    
    session_start();

    $tituloC =isset ($_POST['tituloC']) ?  $_POST['tituloC'] : '';
    $descricaoC = isset($_POST['descricaoC']) ?  $_POST['descricaoC'] : '';
    $responsavelC = isset($_POST['responsavelC']) ?  $_POST['responsavelC'] : '';
    $usuario = isset($_SESSION['id']) ? $_SESSION['id'] : "0";
    
    $sql = "INSERT INTO tarefas VALUE (NULL, :tituloC, :descricaoC, :responsavelC, :usuario, 1)";
        $resultado = $bd->prepare($sql);
        $resultado->bindParam(':tituloC', $tituloC);
        $resultado->bindParam(':descricaoC', $descricaoC);
        $resultado->bindParam(':responsavelC', $responsavelC);
        $resultado->bindParam(':usuario', $usuario);
        $registro = $resultado->execute();
        header('location: ../index.php');
        exit;

        /*$sql = "INSERT INTO tarefas VALUE (NULL, '$tituloC', '$descricaoC', '$responsavelC', '$usuario')";
        $resultado = $bd->query($sql);*/

?>