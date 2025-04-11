<?php

if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo $num1 . " + " . $num2 . " = " . ($num1 + $num2) . "<br>";
    echo $num1 . " - " . $num2 . " = " . ($num1 - $num2) . "<br>";
    echo $num1 . " / " . $num2 . " = " . ($num1 / $num2) . "<br>";
    echo $num1 . " * " . $num2 . " = " . ($num1 * $num2) . "<br>";
    echo $num1 . " % " . $num2 . " = " . ($num1 % $num2) . "<br>";

    /* exrc.php?num1=10&num2=23 */

} else {
    echo "Informe os dois números no parâmetro";
}