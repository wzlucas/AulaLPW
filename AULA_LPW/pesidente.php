<?php

function desenhaLinha(array $dadosCidade){

    echo "<tr>";
    echo "<td> ". $dadosCidade["nome"] ."</td>";
    echo "<td> ". $dadosCidade["numero"] ."</td>";
    echo "<td> ". $dadosCidade["inicio"] ."km² </td>";
    echo "<td> ". $dadosCidade["fim"] ."m </td>";
    echo "<td> ". $dadosCidade["estado"] ."</td>";
    echo "</tr>";


}

//programa principal
$presidente = array();

$Eurico = array("nome" => "Eurico Gaspar Dutra",
             "numero" => 16,
             "inicio" => 1946,
             "fim" => 1951);
array_push($presidente, $Eurico);

$Getulio = array("nome" => "Getúlio Vargas",
             "numero" => 17,
             "inicio" => 1951,
             "fim" => 1954);
array_push($presidente, $Getulio);

$Cafe = array("nome" => "Café Filho",
             "numero" => 18,
             "inicio" => 1954,
             "fim" => 1955);
array_push($presidente, $Cafe);

$Carlos = array("nome" => "Carlos Luz",
             "numero" => 19,
             "inicio" => 1955,
             "fim" => 1955);
array_push($presidente, $Carlos);

$Nereu = array("nome" => "Nereu Ramos",
             "numero" => 20,
             "inicio" => 1955,
             "fim" => 1956);
array_push($presidente, $Nereu);

$Juscelino = array("nome" => "Juscelino Kubitschek",
             "numero" => 240000,
             "inicio" => 1956,
             "fim" => 1961);
array_push($presidente, $Juscelino);



echo "<table border=1>";

//linha de cabeçalho
echo "<tr>";
echo "<td>Nome</td>";
echo "<td>Habitantes</td>";
echo "<td>Área</td>";
echo "<td>fim</td>";
echo "<td>Estados</td>";
echo "<tr>";

//linha de dados
foreach ($presidente as $cidade) {
    /*  
    versão estruturada
    echo "<tr>";
    echo "<td> ". $cidade["nome"] ."</td>";
    echo "<td> ". $cidade["numero"] ."</td>";
    echo "<td> ". $cidade["inicio"] ."</td>";
    echo "<td> ". $cidade["fim"] ."</td>";
    echo "<td> ". $cidade["estado"] ."</td>";
    echo "</tr>";
    */

    desenhaLinha($cidade);

}
