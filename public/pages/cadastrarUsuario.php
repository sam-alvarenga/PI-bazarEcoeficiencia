
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/registrations.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/registrationsResponsive.css">
    <title>Cadastre os usuários aqui!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
        <div class="form-container">
            <h2>Cadastro de Usuários</h2>
            <div class="user-area">
                <form action="cadastro.php" method="post">
                    <select name="perfil">
                        <option selected disabled value="">Selecionar Perfil</option>
                        <option value="colaborador">Colaboradores</option>
                        <option value="adm">Adm</option>
                        <option value="doador">Doador</option>
                    </select>
                    <label for="nome">Nome:</label>
                    <input type="text" placeholder="Nome" id="nome" name="nome" required>
                    <label for="email">Email Pessoal:</label>
                    <input placeholder="Ex.: mariasouza@gmail.com" id="email" name="email" required>
                    <label for="senha">Senha:</label>
                    <input placeholder="Digite uma senha de até 4 caracteres" type="password" id="senha" name="senha"
                        required>
                    <label for="confirma_senha">Confirmar Senha:</label>
                    <input placeholder="Digite novamente a senha" type="password" id="confirma_senha"
                        name="confirma_senha" required>
                    <button type="submit" class="btn-submit">Cadastrar</button>
                </form>
            </div>
        </div>

</body>

</html>