<?php
session_start();
include_once "bd.php";

$email = isset($_POST['email']) ? $_POST['email'] : "";

$senha = isset($_POST['senha']) ? $_POST['senha'] : "";

$sql = "SELECT id, nome FROM usuarios " . "WHERE email = '$email' AND senha = '$senha'";

$resultado = $bd->query($sql);
$registros = $resultado->fetchAll();

if(count($registros) == 1){
    $_SESSION['logado'] = true;
    $_SESSION['nome'] = $registros[0]["nome"];
    $_SESSION['id'] = $registros[0]["id"];
    header("location: ../index.php");
    exit;
} else {
    header("location: ../login.php");
    exit;
}
