<?php

echo "Pagina aberta!";

$nome = $_GET['nome'];
echo "<br>";
echo "Bem vindo " . $nome;

$sobrenome = $_GET['sobrenome'];
echo " " . $sobrenome;

$idade = $_GET['idade'];
echo " " . $idade;

/* get.php?nome=Daniel&sobrenome=Domenico */