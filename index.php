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
$livros = $stm->fetchALL();
echo "<pre>" . print_r($livros, true) . "</pre>";

//Verefica se já clicou no gravar
if (isset($_POST["titulo"])) {
    //echo "já clicou no gravar!";
    //Obter os valores digitados pelo usuário
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $qtdPag = $_POST["paginas"];

    //echo $titulo . "-" . $genero . "-" . $qtdPag;

    //Inserir as informações na base de dados
    $sql = "INSERT INTO livros (titulo, genero, qtd_paginas)
            VALUES (?, ?, ?)";
    $stm = $con->prepare($sql);
    $stm->execute([$titulo, $genero, $qtdPag]);                                                                                                                                    
}



?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>
    <h1>Listagem</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
        </tr>

        <?php foreach ($livros as $l): ?>

            <tr>
                <td> <?= $l['id'] ?> </td>
                <td> <?= $l['titulo'] ?> </td>
                <td> <?= $l['genero'] ?> </td>
                <td> <?= $l['qtd_paginas'] ?> </td>
            </tr>

        <?php endforeach; ?>

    </table>

    <h1>Formulario</h1>

    <form action="" method="POST">

        <div style="margin-bottom: 10px;">
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo">
        </div>

        <div style="margin-bottom: 10px;">
            <label for="genero">Gênero: </label>
            <select name="genero" id="genero">
                <option value="">--Selecione--</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="paginas">Página: </label>
            <input type="number" name="paginas" id="paginas">
        </div>

        <div style="margin-bottom: 10px;">
            <button type="submit">Gravar</button>
        </div>

    </form>

</body>
</html>