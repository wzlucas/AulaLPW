<?php

require_once("modelo/Filme.php");

$nome = $_POST["nome"];
$diretor = $_POST["diretor"];
$ano = $_POST["ano"];
$foto = $_POST["foto"];

echo "
<div style='border: solid 1px; width: 300px; margin-top: 20px;'>
  $nome<br>
  $diretor<br>
  $ano<br>
  <img style='width: 100%; height: auto;' src='$foto' /><br>
</div>";
echo "<br><br>";
echo "<a href='filme_formulario.php'>Voltar</a>";