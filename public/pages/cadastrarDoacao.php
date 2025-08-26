<?php
session_start();

include_once('../classes/Usuario.php');
include_once('../classes/Doacao.php');
include_once('../classes/DoacaoProduto.php');
include('../../includes/layout/sidebar.php');

// Verifica e armazena o usuário
if (isset($_POST['doador']) && $_POST['action'] === 'verificar') {
    $Usuario = new Usuario();
    $usuario = $Usuario->getUsuarioByEmail($_POST['doador']);
    if ($usuario) {
        $_SESSION['idUsuario'] = $usuario['idUsuario'];
        $_SESSION['usuarioNome'] = $usuario['nome'];
        $_SESSION['usuarioCoin'] = $usuario['coin'];
    } else {
        echo "Usuário não encontrado!";
    }
}

// Ao clicar em Doar
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] === "doar") {

    if (isset($_SESSION['idUsuario'])) {
        $idUsuario = $_SESSION['idUsuario'];
        $nomeUsuario = $_SESSION['usuarioNome'];
        $coinUsuario = $_SESSION['usuarioCoin'];

        // Cria a doação
        $Doacao = new Doacao();
        $idDoacao = $Doacao->CadastrarDoacao($idUsuario);

        if ($idDoacao) {
            $DoacaoProduto = new DoacaoProduto();

            $mapaProdutos = [
                "qtdAcessorio" => 1,
                "qtdLivro" => 2,
                "qtdCozinha" => 3,
                "qtdDecoracao" => 4,
                "qtdVestuario" => 5,
                "qtdBrinquedos" => 6,
                "qtdAutomotivo" => 7,
                "qtdEleteronico" => 8,
                "qtdMochilas" => 9
            ];

            $precos = [
                1 => 3,  2 => 3,  3 => 3,  4 => 3,
                5 => 5,  6 => 5,  7 => 6,  8 => 10, 9 => 10
            ];

            $totalDoacao = 0;

            foreach ($mapaProdutos as $campo => $idProduto) {
                if (isset($_POST[$campo]) && $_POST[$campo] > 0) {
                    $quantidade = $_POST[$campo];
                    $totalDoacao += $quantidade * $precos[$idProduto];
                    $DoacaoProduto->CadastrarDoacaoProduto($idProduto, $idDoacao, $quantidade);
                }
            }

            // Atualiza coins usando a sessão
            $Usuario = new Usuario();
            $novoCoin = $coinUsuario + $totalDoacao;
            $Usuario->AtualizarCoins($idUsuario, $novoCoin);

            // Atualiza também na sessão
            $_SESSION['usuarioCoin'] = $novoCoin;


        } else {
            echo "Erro ao criar doação.";
        }
    } else {
        echo "Selecione o doador antes de doar!";
    }
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
    <link rel="stylesheet" href="../assets/css/responsiveSaleDonation.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


</head>

<body>
    <div class="form-container donation-container">

        <h2>Doação</h2>
        <!-- Area do doador -->
        <div class="doador-area">
            <form action="cadastrarDoacao.php" method="post">

                <label for="email-doador">E-mail do doador:</label>
                <input type="email" id="email-doador" placeholder="Digite seu e-mail. Ex: maria.s.ferreira@gmail.com"
                    name="doador" required>
                <button class="btn-submit" type="submit" name="action" value="verificar">Verificar Doador</button>
            </form>

        </div>

        <div class="doador-info">
            <p>Doador:<span class="spaced-span"><?= isset($usuario["nome"]) ? $usuario["nome"] : "" ?></span></p>
            <p>Quantidade de SenaCoins:<span
                    class="spaced-span"><?= isset($usuario["coin"]) ? $usuario["coin"] : "" ?></span></p>
        </div>
        <!-- FIM Area do doador-->

        <!-- Lista de compras -->

        <h3 class="title-list">Itens para Doação</h3>
        <form action="cadastrarDoacao.php" method="post">
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