<?php


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="https://kit.fontawesome.com/23c663159a.js" crossorigin="anonymous"></script>
    <title>Programa Ecoeficiência</title>
    <link rel="icon" href="../../public/assets/img/ecoeficiencia.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <button class="menu-toggle"><i class="fa-solid fa-bars"></i></button> -->
    <div class="container">
        <div class="sidebar">
            <img src="../assets/img/ecoeficiencia.png" alt="Programa Ecoeficiência" class="logo">

           <!--  <?php echo isset($_COOKIE['user_name']) ? "Logado " . $_COOKIE['user_name'] : ""; ?> -->
             <nav class="login">
                <ul>
                    <li>
                        🟢Logado:<span>ROOT:ADMIN</span>
                    </li>
                </ul>
             </nav>
            <nav>
                <ul>
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=cadastro">Cadastro de Usuários</a></li>
                    <li><a href="?page=doacao">Cadastro de Doação</a></li>
                    <li><a href="?page=troca">Troca</a></li>
                    <li><a href="?page=verSaldo">Visualizar Saldo</a></li>
                    <li><a href="?page=relatorio">Relatórios</a></li>
                    
                </ul>
            </nav>
            <nav class="logout">
                <ul>
                    <li ><a href="?page=logout">Sair</a></li>
                </ul>
            </nav>
            
        </div>
    </div>
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.querySelector(".menu-toggle");
            const sidebar = document.querySelector(".sidebar");

            menuToggle.addEventListener("click", function () {
                sidebar.classList.toggle("show");
                menuToggle.classList.toggle("active");
            });

            document.addEventListener("click", function (event) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnToggle = menuToggle.contains(event.target);

                if (!isClickInsideSidebar && !isClickOnToggle && sidebar.classList.contains("show")) {
                sidebar.classList.remove("show");
                menuToggle.classList.remove("active");
                }
            });
        });
    </script> -->
</body>
</html>