<?php

//programa principal
$medalhas = [
    ["ordem" => "1",  "pais" => "<img src='https://img.icons8.com/?size=100&id=15532&format=png&color=000000' width='20' height='20'> USA Estados Unidos", "ouro" => "46", "prata" => "37", "bronze" => "38", "total" => "121"],
    ["ordem" => "2",  "pais" => "<img src='https://img.icons8.com/?size=100&id=15534&format=png&color=000000' width='20' height='20'> GBR Grã-Bretanha", "ouro" => "27", "prata" => "23", "bronze" => "17", "total" => "67"],
    ["ordem" => "3",  "pais" => "<img src='https://img.icons8.com/?size=100&id=17962&format=png&color=000000' width='20' height='20'> CHN China", "ouro" => "26", "prata" => "18", "bronze" => "26", "total" => "70"],
    ["ordem" => "4",  "pais" => "<img src='https://img.icons8.com/?size=100&id=15528&format=png&color=000000' width='20' height='20'> RUS Rússia", "ouro" => "19", "prata" => "17", "bronze" => "20", "total" => "55"],
    ["ordem" => "5",  "pais" => "<img src='https://img.icons8.com/?size=100&id=15502&format=png&color=000000' width='20' height='20'> GER Alemanha", "ouro" => "17", "prata" => "10", "bronze" => "15", "total" => "42"]
    
];

echo "<table border='1'>";
//linha de cabeçalho
echo "<tr>";
echo "<td>Ordem</td>";
echo "<td>País</td>";
echo "<td><img src='https://img.icons8.com/?size=100&id=P8ABvI6vNxHz&format=png&color=000000' width='20' height='20'></td>";
echo "<td><img src='https://img.icons8.com/?size=100&id=1QVqEll3AmyP&format=png&color=000000' width='20' height='20'></td>";
echo "<td><img src='https://img.icons8.com/?size=100&id=lMwvkoCmvpSJ&format=png&color=000000' width='20' height='20'></td>";
echo "<td><img src='https://img.icons8.com/?size=100&id=dLNUgT4k6wsk&format=png&color=000000' width='20' height='20'></td>";
echo "<tr>";

foreach ($medalhas as $med) {

    echo "<tr>";
    echo "<td> ". $med["ordem"] ."</td>";
    echo "<td> ". $med["pais"] ."</td>";
    echo "<td> ". $med["ouro"] ."</td>";
    echo "<td> ". $med["prata"] ."</td>";
    echo "<td> ". $med["bronze"] ."</td>";
    echo "<td> ". $med["total"] ."</td>";
    echo "</tr>";
}