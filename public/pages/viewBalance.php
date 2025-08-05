<?php 
include ("../../includes/layout/sidebar.php")
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../assets/css/main.css">
    <link rel="stylesheet" href="./../assets/css/reports.css">
    <link rel="stylesheet" href="./../assets/css/reportsResponsiveB.css">
    <title>Veja seu Saldo!</title>
    <style>
      

    </style>
</head>
<body>
    <div class="report-container">
        <img src="../assets/img/senacoin.webp" alt="Moeda Amarela SenaCoin">
        <div class="balance">
            <h3>Seu Saldo Atual é:</h3>
            <h2>15</h2>
            <h3>SenaCoins</h3>
        </div>
        <div class="balance-list">
            <table>
                <thead>
                    <tr>
                        <th>Itens Doados</th>
                        <th class="quantity">Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Acessórios</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Livros | DVD | CD | Disco</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Utensílios de Cozinha</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Artigos de Decoração</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="balance-btn">
            <button class="update-btn">Atualizar Saldo</button>
        </div>
    </div>
</body>
</html>