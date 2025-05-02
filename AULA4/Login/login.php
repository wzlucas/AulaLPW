<?php

$logado = false;
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == "ifpr" && $senha == "tds") {
            $logado = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(! $logado): ?>
        <form action="" method="POST">

        <input type="text" name="login" placeholder="Login">
        <br><br>

        <input type="password" name="senha" placeholder="Senha">
        <br><br>

        <input type="submit" value="Logar">
        </form>

    <?php else: ?>
        <p>Bem vindo ao TDS!</p>
    <?php endif; ?>

</body>
</html>