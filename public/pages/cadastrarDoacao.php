<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação</title>

    <!-- css link-->
    <link rel="stylesheet" href="../assets/css/registrations.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
    <div class="form-container">

        <h2>Doação</h2>
        <!-- Area do doador -->
        <div class="doador-area">
            <form action="cadastrarDoacao.php" method="post">

                <label for="email-doador">E-mail do doador:</label>
                <input type="email" id="email-doador" name="doador" required>

            </form>
            <button class="btn-submit" type="submit" name="action" value="verificar">Verificar Doador</button>
        </div>

        <div class="doador-info">
            <p>Doador:<span></span></p>
            <p>Quantidade de SenaCoins:<span></span></p>
        </div>
        <!-- FIM Area do doador-->

        <!-- Lista de compras -->

        <h3>Itens para Doação</h3>
        <div class="list-container">
            <div class="item-row">
                <div class="item-info">Acessórios - $3</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item-info">Livros | DVD | CD | Disco - $3</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item-info">Utensílios de Cozinha - $3</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item-info">Artigos de Decoração - $3</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item-info">Vestuário e Calçados - $5</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item-info">Brinquedos e Jogos - $5</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item-info">Artigos Automotivos - $6</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item-info">Eletrônicos e<br> Eletrodomésticos - $10</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>
            </div>
            <div class="item-row last">
                <div class="item-info">Mochilas - $10</div>
                <div class="quantity-control">
                    <button class="btn-control">-</button>
                    <input type="number" class="quantity-input" value="0" min="0">
                    <button class="btn-control">+</button>
                </div>

            </div>

        </div>
        <button class="btn-submit" type="submit" name="action" value="doar">Doar</button>

    </div>
</body>

</html>