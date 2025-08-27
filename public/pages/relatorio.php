<?php 
/* include ("../../includes/layout/sidebar.php"); */
include_once('../../includes/Conexao.php');

// Conexão
$conexao = new Conexao();
$conn = $conexao->getConnection();

// TOP 3 doadores
$sqlTopDoadores = "
    SELECT u.nome, COUNT(d.idDoacao) AS totalDoacoes
    FROM usuarios u
    JOIN doacao d ON u.idUsuario = d.idUsuario
    GROUP BY u.idUsuario
    ORDER BY totalDoacoes DESC
    LIMIT 3
";
$resultTop = mysqli_query($conn, $sqlTopDoadores);
$topDoadores = mysqli_fetch_all($resultTop, MYSQLI_ASSOC);

// Quantidade total de produtos doados
$sqlTotalProdutosDoados = "
    SELECT SUM(dp.quantidade) AS totalProdutos
    FROM doacaoproduto dp
";
$resultProdutosDoados = mysqli_query($conn, $sqlTotalProdutosDoados);
$totalProdutosDo = mysqli_fetch_assoc($resultProdutosDoados)['totalProdutos'] ?? 0;

// Quantidade total de produtos trocados (se tiver tabela de trocas similar a doação)
$sqlTotalProdutosTrocados = "
    SELECT SUM(tp.quantidade) AS totalTrocados
    FROM trocaproduto tp
";
$resultProdutosTrocados = mysqli_query($conn, $sqlTotalProdutosTrocados);
$totalProdutosTrocados = mysqli_fetch_assoc($resultProdutosTrocados)['totalTrocados'] ?? 0;

// Quantidade de produtos por categoria (sobra e trocas)
$sqlProdutosCategoria = "
    SELECT p.nome, SUM(dp.quantidade) AS total
    FROM produto p
    LEFT JOIN doacaoproduto dp ON p.idProduto = dp.idProduto
    GROUP BY p.idProduto
";
$resultCategoria = mysqli_query($conn, $sqlProdutosCategoria);
$produtosCategoria = mysqli_fetch_all($resultCategoria, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório - Bazar Ecoeficiência</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/reports.css">
    <link rel="stylesheet" href="../assets/css/responsive/reportsResponsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<div class="report-container">
    <h2>Relatórios</h2>
    <ul class="report-list">
        <li class="topic">Top 3 pessoas que mais doaram:
            <ul>
                <?php foreach($topDoadores as $doador): ?>
                    <li><?= htmlspecialchars($doador['nome']) ?> (<?= $doador['totalDoacoes'] ?> doações)</li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="topic">Quantidade total de produtos doados:<span><?= $totalProdutosDo ?></span></li>
        <li class="topic">Quantidade total de produtos trocados:<span><?= $totalProdutosTrocados ?></span></li>
        <li class="topic">Quantidade de produtos em sobra:
            <ul>
                <?php foreach($produtosCategoria as $produto): ?>
                    <li><?= htmlspecialchars($produto['nome']) ?> - <?= $produto['total'] ?? 0 ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="topic">Quantidade de trocas por categoria:
            <ul>
                <?php foreach($produtosCategoria as $produto): ?>
                    <li><?= htmlspecialchars($produto['nome']) ?> - <?= $produto['total'] ?? 0 ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
</div>
</body>
</html>
