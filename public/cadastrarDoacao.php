<?php
include ("./../includes/conexao.php");
/* include ("./../includes/layout/sidebar.php"); */
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação</title>
    
    <!-- css link-->
    <link rel="stylesheet" href="./assets/css/registrations.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div class="form-container">

        <h2>Doação</h2>

        <form action="cadastrarDoacao.php" method="post">
            <div class="doador-area">
                <label for="email-doador">E-mail do doador:</label>
                <input type="email" id="email-doador" name="doador" required 
                    disabled> 
                <button type="submit" name="action" value="verificar">Verificar Doador</button>
            </div>
        </form>
    </div>
</body>

</html>