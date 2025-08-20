<?php 
    session_start();
    include('../../includes/layout/sidebar.php'); 
    include('../classes/Usuario.php');
    include_once('../../includes/Conexao.php');

    $CadastroUsuario = new Usuario();

   /*  var_dump($_POST); */

    if (isset($_POST['Nome']) && isset($_POST['Senha']) && isset($_POST['Perfil']) && isset($_POST['Email'])) {
        /* $CadastroUsuario->setNome($_POST['Nome']);
        $CadastroUsuario->setEmail($_POST['Email']);
        $CadastroUsuario->setSenha($_POST['Senha']);
        $CadastroUsuario->setPerfil($_POST['Perfil']); */
        
        $CadastroUsuario->CadastroUsuario($_POST['Nome'], $_POST['Email'],$_POST['Senha'], $_POST['Perfil']);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/registrationsUser.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive/registrationsResponsiveUser.css">
    <title>Cadastre os usuários aqui!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
        <div class="form-container user-container">
            <h2>Cadastro de Usuários</h2>
            <div class="user-area">
                <form action="cadastrarUsuario.php" method="post">
                    <select name="Perfil">
                        <option selected disabled value="">Selecionar Perfil</option>
                        <option value="colaborador">Colaboradores</option>
                        <option value="adm">Adm</option>
                        <option value="doador">Doador</option>
                    </select>
                    <label for="nome">Nome:</label>
                    <input type="text" placeholder="Nome" id="nome" name="Nome" required>
                    <label for="email">Email Pessoal:</label>
                    <input type="email" placeholder="Ex.: mariasouza@gmail.com" id="email" name="Email" required>
                    <label for="senha">Senha:</label>
                    <input placeholder="Digite uma senha de até 8 caracteres" type="password" id="senha" name="Senha"
                        required>
                    <label for="confirma_senha">Confirmar Senha:</label>
                    <input placeholder="Digite novamente a senha" type="password" id="confirma_senha"
                        name="confirma_senha" required>
                    <button type="submit" class="btn-submit" name="cadastrar">Cadastrar</button>
                </form>
            </div>
        </div>

</body>

</html>