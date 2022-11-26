<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<body>
    <div id="quadroLogin">
        <div id="titulo"><h1>CADASTRRO KANBAN</h1></div>

        <div id="entrada">
            <form action="./PHP/cadastrar.php" method="post">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id='nome' class="inLogin">

            <label for="email">E-mail:</label>
            <input type="email" name="email" id='email' class="inLogin"> 

            <label for="senha">Senha:</label> 
            <input type="password" name="senha" id='senha' class="inLogin"> 

            <button value="submit" id="botao">Cadastrar</button>

            
            </form>
        </div>
        
    </div>

</body>
</html>

