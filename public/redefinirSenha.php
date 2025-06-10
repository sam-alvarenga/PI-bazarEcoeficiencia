<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/redefinirSenha.css">

    <title>Login Colaboradores</title>
</head>

<body>

    <div class="form-container " >
        <h2>Redefinir senha</h2>


            <form method="post" class="form-login">
                <input placeholder="Digite o e-mail cadastrado" id="login" name="login" required>
                <input type="password" placeholder="Nova senha" id="senha" name="senha" required>
              
            </form>
            <button type="submit">Redefinir</button>

            <a href="index.php">Voltar para a tela de login</a>


    </div>

</body>


</html>