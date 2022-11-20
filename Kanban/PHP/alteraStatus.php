<?php 
include_once "bd.php";

$situacao = $_GET['coluna'];
$item = $_GET['item'];

    $sql = "UPDATE tarefas SET situacao = :situacao  WHERE  id = :item";
      
         $resultado = $bd->prepare($sql);
        $resultado->bindParam(':situacao', $situacao);
        $resultado->bindParam(':item', $item);
        $registro = $resultado->execute();

        header('location: ../index.php');
        exit;

        
?>
