<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

$con = Conexao::getConexao();
//print_r($con);

//Buscar os livros já salvos na base de dados
$sql = "SELECT * FROM livros";
$stm = $con->prepare($sql);
$stm->execute();
$livros = $stm->fetchAll();
//echo "<pre>" . print_r($livros, true) . "</pre>";

//Verificar se o usuário já clicou no Gravar
if(isset($_POST["titulo"])) {
    //Obter os valores digitados pelo usuário
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $genero = $_POST["genero"];
    $qtdPag = $_POST["paginas"];

    //Inserir as informações na base de dados
    $sql = "INSERT INTO livros (titulo, autor, genero, qtd_paginas) 
            VALUES (?, ?, ?, ?)";
    $stm = $con->prepare($sql);
    $stm->execute([$titulo, $autor, $genero, $qtdPag]);

    header("location: index.php");

}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>
    <h1>Listagem</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th>Excluir</th>
            
        </tr>

        <?php foreach($livros as $l): ?>
            <tr>
                <td><?= $l["id"] ?></td>
                <td><?= $l["titulo"] ?></td>
                <td><?php if($l["genero"] == 'D')
                            echo "Drama";
                          else if($l["genero"] == 'F')
                            echo "Ficção";
                          else if($l["genero"] == 'R')
                            echo "Romance";
                          else
                            echo "Outro"; ?></td>
                <td><?= $l["qtd_paginas"] ?></td>
                <td><?= $l["autor"]?></td>
                <td><a href="excluir.php?id=<?= $l['id'] ?>" onclick="return confirm('Confirma a exclusão?');">Excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <h1>Formulário</h1>

    <form action="" method="POST">
        <div style="margin-bottom: 10px;">
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" class="inputs required"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="autor">Autor: </label>
            <input type="text" name="autor" id="autor" class="inputs required"/>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="genero">Gênero: </label>
            <select name="genero" id="genero">
                <option value="">---Selecione---</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="paginas">Páginas: </label>
            <input type="number" name="paginas" id="paginas" class="inputs required"/>
        </div>

        <div style="margin-bottom: 10px;">
            <button type="submit">Gravar</button>
        </div>

    </form>
    
</body>
</html>