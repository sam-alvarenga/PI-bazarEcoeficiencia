<?php

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="forms.css">
    <title>Visualizar Saldo</title>
</head>
<body>
    <div class="form-container">
        <h2>Saldo Atual</h2>
        
        <img src="imgs/senacoin.webp" alt="Imagem de uma Moeda">

        <p>Seu saldo atual é:</p>
        <h3><?php echo $saldo; ?> SenaCoins</h3>

        <button type="button" onclick="location.reload();">Atualizar Saldo</button> 
    </div>
</body>
</html>