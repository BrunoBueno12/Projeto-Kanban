<?php 
include_once "bd.php";

$idItem = $_GET['idItem'];
$idItem = openssl_decrypt ($idItem, "AES-256-CBC", "kanban",);

    $sql = "DELETE FROM tarefas WHERE  id = :idItem";
      
        $resultado = $bd->prepare($sql);
        $resultado->bindParam(':idItem', $idItem);
        $registro = $resultado->execute();

        header('location: ../index.php');
        exit;

        
?>
