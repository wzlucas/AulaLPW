<?php

require_once("modelo/Veiculo.php");

$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$combust = $_POST["combustivel"];

$veiculo = new Veiculo();
$veiculo->setModelo($modelo)
        ->setMarca($marca)
        ->setCombust($combust);

echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $modelo . "<br>";
echo "Marca: " . $marca . "<br>";
echo "Combustível: " . $veiculo->tipoCombustivel() . "<br>";
echo "<br><br>";
echo "<a href='formulario.php'>Cadastrar outro veículo</a>";