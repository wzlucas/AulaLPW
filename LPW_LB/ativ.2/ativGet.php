<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

$soma = $num1 + $num2 + $num3;
$media = $soma / 3;
echo "A media dos numeros é: " . $media;

/* ativGet.php?num1=53&num2=23&num3=12 */