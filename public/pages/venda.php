<?php
session_start();
/* include('../../includes/layout/sidebar.php'); */
include('../classes/Usuario.php');
include_once('../../includes/Conexao.php');

$ProcuraUsuario = new Usuario();

if (isset($_POST['doador'])) {
    $Usuario = $ProcuraUsuario->getUsuarioByEmail($_POST['doador']);

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação</title>

    <!-- css link-->
    <!-- css geral -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- css específico -->
    <link rel="stylesheet" href="../assets/css/donation-sale.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


</head>

<body>
    <div class="form-container sale-container">

        <h2>Venda</h2>
        <!-- Area do doador -->
        <div class="doador-area">
            <form action="cadastrarDoacao.php" method="post">

                <label for="email-doador">E-mail do doador:</label>
                <input type="email" id="email-doador" placeholder="Digite seu e-mail. Ex: maria.s.ferreira@gmail.com"
                    name="doador" required>

            </form>
            <button class="btn-submit" type="submit" name="action" value="verificar">Verificar Doador</button>
        </div>

        <div class="doador-info">
            <p>Doador:<span class="spaced-span"><?= isset($Usuario["nome"]) ? $Usuario["nome"] : "" ?></span></p>
            <p>Quantidade de SenaCoins:<span
                    class="spaced-span"><?= isset($Usuario["coin"]) ? $Usuario["coin"] : "" ?></span></p>
        </div>
        <!-- FIM Area do doador-->

        <!-- Lista de compras -->

        <h3 class="title-list">Itens para Venda</h3>
        <form action="venda.php" method="post">
            <div class="list-container">
                <div class="item-row">
                    <div class="item-info" data-price="3">Acessórios - $3</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdAcessorio" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>
                </div>
                <div class="item-row">
                    <div class="item-info" data-price="3">Livros | DVD | CD | Disco - $3</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdLivro" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>
                </div>
                <div class="item-row">
                    <div class="item-info" data-price="3">Utensílios de Cozinha - $3</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdCozinha" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>
                </div>
                <div class="item-row">
                    <div class="item-info" data-price="3">Artigos de Decoração - $3</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdDecoracao" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>
                </div>
                <div class="item-row">
                    <div class="item-info" data-price="5">Vestuário e Calçados - $5</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdVestuario" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>
                </div>
                <div class="item-row">
                    <div class="item-info" data-price="5">Brinquedos e Jogos - $5</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdBrinquedos" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>
                </div>
                <div class="item-row">
                    <div class="item-info" data-price="6">Artigos Automotivos - $6</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdAutomotivo" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>
                </div>
                <div class="item-row">
                    <div class="item-info" data-price="10">Eletrônicos e Eletrodomésticos - $10</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdEleteronico" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>
                </div>
                <div class="item-row last">
                    <div class="item-info" data-price="10">Mochilas - $10</div>
                    <div class="quantity-control">
                        <button class="btn-control round-left">-</button>
                        <input type="number" class="quantity-input" name="qtdMochilas" value="0" min="0" readonly>
                        <button class="btn-control round-right">+</button>
                    </div>

                </div>

            </div>
            <div class="senacoins-result">
                <p>Total SenaCoins: $<span class="senacoins-total">0</span> </p>
                <img src="../assets/img/senacoin.webp" alt="">
            </div>
            <button class="btn-submit" type="submit" name="action" value="doar">Doar</button>
        </form>

    </div>
    <script src="../assets/java/mainScript.js"></script>
</body>

</html>