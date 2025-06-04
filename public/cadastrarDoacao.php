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
    <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
    <div class="form-container">

        <h2>Doação</h2>

        <form action="cadastrarDoacao.php" method="post">
            <div class="doador-area">
                <label for="email-doador">E-mail do doador:</label>
                <!-- <?php if (isset($_COOKIE['dadosDoador'])) { ?> -->
                <input type="email" id="email-doador" name="doador" required value=<!-- <?php echo $_COOKIE['doador']; ?>
                    disabled> -->
                <button type="submit" name="action" value="verificar">Verificar Doador</button>
               <!--  <?php } else {
                    ?> -->
                <input type="text" id="login-doador" name="doador" required>
                <button type="submit" name="action" value="verificar">Verificar Doador</button>
                <!-- <?php } ?> -->
            </div>

           <!--  <?php
            if (isset($_COOKIE['dadosDoador'])) {
                echo '<div class="doador-found">';
                echo $_COOKIE['dadosDoador'];
                echo "</div>";
                ?> -->
            <label for="classificacao">Classificação do Objeto Doado:</label>
            <select name="categorias" id="categorias">
                <option selected disable value=""> Selecionar categoria</option>
                <option value="1">Acessórios - $ 3</option>
                <option value="2">Livros | DVD | CD | Disco - $ 3</option>
                <option value="3">Utensílios de Cozinha - $ 3</option>
                <option value="4">Artigos de Decoração - $ 3</option>
                <option value="5">Vestuário e Calçados - $ 5</option>
                <option value="6">Brinquedos e Jogos - $ 5</option>
                <option value="7">Artigos Automotivos - $ 6</option>
                <option value="8">Eletrônicos e Eletrodomésticos - $ 10</option>
                <option value="9">Mochilas - $ 10</option>
            </select>

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" min="1" value="1" required>
            <button type="submit" name="action" value="doar">Doar</button>
            <?php } ?>



        </form>


    </div>
</body>

</html>