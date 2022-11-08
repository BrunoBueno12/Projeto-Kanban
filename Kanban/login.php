<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estiloLogin.css">
    <title>Logar</title>
</head>

<?php
session_start();

$usuarioLogado = isset($_SESSION['logado']) 
                    ? $_SESSION['logado'] : false;

if($usuarioLogado == true){
    header("location: index.php");
    exit;
}

?>

<body>

 
    <div id="quadroLogin">

      <!-- <img id="icone" src="./imagem/iconeKanban.png"> -->

       <!-- <img id="img" src="./imagem/kanbanimg.png"> -->

        <div id="titulo"><h1>KANBAN</h1></div>

        <div id="entrada">
            <form action="./PHP/logar.php" method="post">

            <label for="email">E-mail:</label>
            <input type="email" name="email" class="inLogin"> 

            <label for="senha">Senha:</label> 
            <input type="password" name="senha" class="inLogin"> 

            <button value="submit" id="botao">Entrar</button>

            </form>
        </div>
    </div>

    <a  href='cadastro.php'><button id='botaoCad'>Cadastrar</button></a>
    
</body>
</html>