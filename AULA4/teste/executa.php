<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($nome !='' && $idade !=''){
    echo "Insira os valores";
    echo "Bem vindo {$nome} - {$idade} anos!";
    echo "<br><br>";
    echo "<a href='form.php'>Voltar</a>";
} else {
    echo "Insira os valores!";
}
