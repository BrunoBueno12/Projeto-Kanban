<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloAtualizar.css">
    <title>Atualizar Tarefa</title>
</head>
<body>

<?php 
            include_once "bd.php";
            
            $idItem = $_GET['idItem'];
            $idItem = openssl_decrypt ($idItem, "AES-256-CBC", "kanban",);

            $sql = "SELECT * FROM tarefas WHERE id = $idItem";
            $resultado = $bd->query($sql);
            $registros = $resultado -> fetchAll();

            foreach ($registros as $r)

            echo "<form form id='formAdd' action='./atualizouTarefa.php' method='post' autocomplete = 'off'>
                    <h1>Editar Tarefa</h1>
                
                    <label for='tituloC'>Título</label>
                    <input value='" . $r['titulo'] . "' type='text' class='adicionar' name='tituloC' id='tituloC' placeholder='Titulo'> <br> <br>
                    <label for='descricaoC'>Descrição</label>
                    <textarea class='adicionar' name='descricaoC' id='descricaoC' cols='10' rows='10' 
                    placeholder='Descrição'>".$r['descricao']."</textarea> <br><br>
                    <label for='responsavelC'>Responsável</label>
                    <input value='" . $r['responsavel'] . "' type='text' class='adicionar' name='responsavelC' id='responsavelC' placeholder='Responsável'><br>
                    <button value='submit' data-id='" .$idItem. "'id='salvar'>Salvar Alterações</button>
                    <button href='./index.php' id='cancelar'>Cancelar</button>
                    <INPUT TYPE='hidden' name='cod' id='cod' VALUE=" .$idItem. ">
                </form>"
             
?>
    
    
    
    

</body>
</html>