<?php
include ("./../includes/layout/sidebar.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>

    <!-- css link-->
     <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
    <div class="form-container">

        <h2>Cadastrar Usuário</h2>


        <form action="cadastro.php" method="post">
            <select name="perfil">
                <option selected disabled value="">Selecionar Perfil</option>
                <option value="colaborador">Colaboradores</option>
                <option value="adm">Adm</option>
                <option value="doador">Doador</option>
            </select>
            <label for="nome">Nome:</label>
            <input type="text" placeholder="Nome" id="nome" name="nome" required>
            <label for="login">E-mail Pessoal:</label>
            <input placeholder="Ex: maria@gmail.com" id="login" name="login" required>
            <label for="senha">Senha:</label>
            <input placeholder="Digite os 4 últimos dígitos do celular" type="password" id="senha" name="senha"
                required>
            <label for="confirma_senha">Confirmar Senha:</label>
            <input placeholder="Digite novamente a senha" type="password" id="confirma_senha" name="confirma_senha"
                required>
            <button type="submit">Cadastrar</button>

        </form>

    </div>
</body>

</html>