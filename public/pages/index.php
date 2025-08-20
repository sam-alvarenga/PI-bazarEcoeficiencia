<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">

    <title>Login Colaboradores</title>
</head>

<body>

    <div class="form-container">
        <h2>Login</h2>


            <form method="post" class="form-login">
                <input placeholder="Digite o e-mail cadastrado" id="login" name="login" required>
                <input type="password" placeholder="Senha" id="senha" name="senha" required>
              
            </form>
            <button type="submit">Entrar</button>

            <a href="redefinirSenha.php">Esqueceu sua senha?</a>

    </div>

</body>


</html>