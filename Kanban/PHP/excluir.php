<?php 
include_once "bd.php";

$idItem = $_GET['idItem'];

    $sql = "DELETE FROM tarefas WHERE  id = :idItem";
      
        $resultado = $bd->prepare($sql);
        $resultado->bindParam(':idItem', $idItem);
        $registro = $resultado->execute();

        header('location: ../index.php');
        exit;

        
?>
