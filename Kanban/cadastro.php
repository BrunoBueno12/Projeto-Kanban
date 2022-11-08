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


    <div id='FormCad'>
    <h1>Cadastrar Usuário</h1>
    <form action="./PHP/cadastrar.php" method="post">
    <input class='entrada' type="text" placeholder="Nome" name="nome">  <br>
    <input class='entrada' type="email" placeholder="E-mail" name="email"> <br>
    <input class='entrada' type="password" placeholder="Senha" name="senha"> <br>

    <input id='botao' type="submit" value="Cadastrar">
    </form>
    </div>
</body>
</html>

