<?php

session_start();
include '../includes/conexao.php'; 

class Usuario {
    private $conexao;

    public function __construct($db_connection) {
        $this->conexao = $db_connection;
    }

    public function autenticar(string $email, string $senha): bool {

        $sql = "SELECT idUsuario, nome, senha FROM usuarios WHERE email = ?";
        
        $stmt = $this->conexao->prepare($sql);
        if (!$stmt) {
            error_log("Erro ao preparar a query: " . $this->conexao->error);
            return false;
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();


        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();

            if (password_verify($senha, $usuario['senha'])) {

                $_SESSION['idUsuario'] = $usuario['idUsuario'];
                $_SESSION['NomeUsuario'] = $usuario['nome'];

                header("Location: cadastrarUsuario.php");
                exit();
            }
        }

        return false;
    }
}


$mensagem_erro = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $email_login = strtoupper($_POST['login']);
    $senha_login = $_POST['senha'];


    $conexao_obj = new Conexao();

    $conexao_db = $conexao_obj->getConnection();

    $user = new Usuario($conexao_db);
    

    if (!$user->autenticar($email_login, $senha_login)) {
        $mensagem_erro = "E-mail ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Login Colaboradores</title>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>

        <?php if (!empty($mensagem_erro)): ?>
            <p style="color: red; text-align: center;"><?php echo $mensagem_erro; ?></p>
        <?php endif; ?>

        <form method="post" action="" class="form-login">
            <input placeholder="Digite o e-mail cadastrado" id="login" name="login" required>
            <input type="password" placeholder="Senha" id="senha" name="senha" required>
            <button type="submit">Entrar</button>
        </form>
        
        <a href="redefinirSenha.php">Esqueceu sua senha?</a>
    </div>
</body>
</html>