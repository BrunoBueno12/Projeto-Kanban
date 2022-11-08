<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.2.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/estiloindex.css">
    <link rel="stylesheet" href="./SweetAlert/dist/sweetalert2.css">
    <title>Projeto Kanban</title>
</head>

<?php
session_start();

$usuarioLogado = isset($_SESSION['logado']) ? $_SESSION['logado'] : false;

if($usuarioLogado == false){
    header("location: login.php");
    exit;
}

$nomeUsuario = isset($_SESSION['nome']) ? $_SESSION['nome'] : "Sem nome";

$idUsuario = isset($_SESSION['id']) ? $_SESSION['id'] : "0";

?>

<body>
  <nav>
    <h1>Quadro de Tarefas</h1>
    <img src="./imagem/nave.png" width="60px" height="60px">

    <div id='infoUsuario'>
    <p id='nomeUsuario'><?php echo " $nomeUsuario " ?></p>
        <img id='imgUsuario' src="./imagem/iconUsuario.png" >
    </div>

  </nav>
   
  
   <!-- <div id="lateral">
      <h1>Opções</h1>
    <ul>    
      <li><button class="itens" id="adicionar">Adicionar Tarefa</button></li>
      <li><button class="itens">Item2</button></li>
      <li><button class="itens">item3</button></li>
    </ul>
    <button id="sair"> <img src="./imagem/sair.png"> <a href="./PHP/logout.php">Sair</a></button>
  </div> 
  --> 

  <div class="kanban">
    
    <div class="coluna" id="Cpendente">
      <h1 class="topico" id="pendente">Pendente</h1>
      <div class="item" data-id="1" draggable="true">Card 01 <button class="opition"><img src="./imagem/opcoes.png" width="20px" height="20px"></button></div>
      <div class="item" data-id="2" draggable="true">Card 02 <button class="opition"><img src="./imagem/opcoes.png" width="20px" height="20px"></button></div>
    </div>
    
    <div class="coluna" id="Candamento">
      <h1 class="topico" id="andamento">Em Andamento</h1>
      <div class="item" draggable="true">Card 03 <button class="opition"><img src="./imagem/opcoes.png" width="20px" height="20px"></button></div>
      <div class="item" draggable="true">Card 04 <button class="opition"><img src="./imagem/opcoes.png" width="20px" height="20px"></button></div>
    </div>
    
    <div class="coluna" id="Cconcluido">
      <h1 class="topico" id="concluido">Concluído</h1>
      <div class="item" draggable="true">Card 05 <button class="opition"><img src="./imagem/opcoes.png" width="20px" height="20px"></button></div>
      <div class="item" draggable="true">Card 06 <button class="opition"><img src="./imagem/opcoes.png" width="20px" height="20px"></button></div>
    </div>
  </div>

  <a href="./PHP/logout.php"><button id="sair2"> <img src="./imagem/sair.png"> Sair</button></a>

  <button id="adicionar" ><img id="imgAdic" src="./imagem/iconAdicionar.png" alt=""></button> 
  

    <script src="./Js/jquery.js"></script>
    <script src="bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <script src="./Js/index.js"></script>
    <script src="./SweetAlert/dist/sweetalert2.js"></script>

 
</body>
</html>