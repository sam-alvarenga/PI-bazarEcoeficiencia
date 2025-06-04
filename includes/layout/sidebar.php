<?php


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Programa Ecoeficiência</title>
    <link rel="icon" href="../../public/assets/img/ecoeficiencia.ico" type="image/png">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="../../public/assets/img/ecoeficiencia.png" alt="Programa Ecoeficiência" class="logo">

            <!--  <?php echo isset($_COOKIE['user_name']) ? "Logado " . $_COOKIE['user_name'] : ""; ?> -->
            <nav>
                <ul>
                    <li><a href="?page=cadastro">Cadastro de Usuários</a></li>
                    <li><a href="?page=doacao">Cadastro de Doação</a></li>
                    <li><a href="?page=troca">Troca</a></li>
                    <li><a href="?page=verSaldo">Visualizar Saldo</a></li>
                    <li><a href="?page=relatorio">Relatórios</a></li>
                    <li><a href="?page=logout">Sair</a></li>
                </ul>
            </nav>
        </div>

</body>

</html>