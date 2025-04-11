<?php

require_once('model/Pessoa.php');

if (isset($_GET['tipo']) && ($_GET['tipo'] == 'A' || $_GET['tipo'] == 'C')) {
    
    if ($tipo != '') {
        
        if ($tipo == 'A') {
            $pessoa['nome'] = $_GET['nome'];
            $pessoa['sobrenome'] = $_GET['sobrenome'];
            $pessoa['idade'] = $_GET['idade'];
        
            echo "<span style='font-weight: bold;'>Nome Completo:Idade</span>";
            echo 
        
            } elseif ($tipo === 'A') {
               
                $pessoa = [
                    'nome' => $nome,
                    'sobrenome' => $sobrenome,
                    'idade' => $idade
                ];
        
                echo "Nome completo: " . $pessoa['nome'] . " " . $pessoa['sobrenome'] . "\n";
                echo "Idade: " . $pessoa['idade'] . "\n";
            }
        
        } else {
            echo "Erro: Os parâmetros 'nome', 'sobrenome' e 'idade' são obrigatórios.";
        }
    }
}

