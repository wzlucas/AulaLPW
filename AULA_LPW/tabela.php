<?php

function desenhaLinha(array $dadosCidade){

    echo "<tr>";
    echo "<td> ". $dadosCidade["nome"] ."</td>";
    echo "<td> ". $dadosCidade["habit"] ."</td>";
    echo "<td> ". $dadosCidade["area"] ."km² </td>";
    echo "<td> ". $dadosCidade["altitude"] ."m </td>";
    echo "<td> ". $dadosCidade["estado"] ."</td>";
    echo "</tr>";


}

//programa principal
$linhas = array();

$foz = array("nome" => "Foz do Iguaçu",
             "habit" => 250000,
             "area" => 500,
             "altitude" => 145,
             "estado" => "Paraná-PR");
array_push($linhas, $foz);

$cascavel = array("nome" => "Cascavel",
             "habit" => 250000,
             "area" => 420,
             "altitude" => 320,
             "estado" => "Paraná-PR");
array_push($linhas, $cascavel);

$chapeco = array("nome" => "Chapecó",
             "habit" => 240000,
             "area" => 120,
             "altitude" => 620,
             "estado" => "Santa Catarina-SC");
array_push($linhas, $chapeco);



echo "<table border=1>";

//linha de cabeçalho
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Habitantes</td>";
echo "<td>Área</td>";
echo "<td>Altitude</td>";
echo "<td>Estados</td>";
echo "<tr>";

//linha de dados
foreach ($linhas as $cidade) {
    /*  
    versão estruturada
    echo "<tr>";
    echo "<td> ". $cidade["nome"] ."</td>";
    echo "<td> ". $cidade["habit"] ."</td>";
    echo "<td> ". $cidade["area"] ."</td>";
    echo "<td> ". $cidade["altitude"] ."</td>";
    echo "<td> ". $cidade["estado"] ."</td>";
    echo "</tr>";
    */

    desenhaLinha($cidade);

}
