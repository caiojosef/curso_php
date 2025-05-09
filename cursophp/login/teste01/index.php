<?php
require_once 'db_connect.php';
session_start();

$erros = [];

// Quando o botão de login for clicado
if (isset($_POST['btn-entrar'])) {
    $login = trim($_POST['login']);
    $senha = hash('sha256', $_POST['senha']); // Criptografia segura

    if (empty($login) || empty($senha)) {
        $erros[] = "O campo login/senha precisa ser preenchido.";
    } else {
        $sql = "SELECT login FROM usuarios WHERE login = ? AND senha = ?";
        $params = array($login, $senha);
        $resultado = sqlsrv_query($conn, $sql, $params);

        if ($resultado && sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $login;
            header('Location: painel.php');
            exit;
        } else {
            $erros[] = "Usuário ou senha inválidos.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP + SQL Server</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
            width: 350px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #0078D7;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background: #005aab;
        }
        .erros {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h1>Login</h1>

    <?php if (!empty($erros)): ?>
        <div class="erros">
            <?php foreach ($erros as $erro): ?>
                <p>• <?php echo $erro; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" placeholder="Digite seu login">

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">

        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</div>

</body>
</html>
