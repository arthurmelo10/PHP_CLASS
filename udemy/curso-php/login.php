<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email) {
    $usuarios = [
        [
            "nome" => "João Silva",
            "email" => "joao@email.com.br",
            "senha" => "123",
        ],
        [
            "nome" => "Maria Silva",
            "email" => "msilva@email.com.br",
            "senha" => "abc",
        ],
        [
            "nome" => "Roberto Costa",
            "email" => "rcosta@email.com.br",
            "senha" => "123456",
        ],
    ];

    foreach ($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'] ? true : false;
        $senhaValida = $senha === $usuario['senha'] ? true : false;

        if ($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario["nome"];
            header('Location: index.php');
        }
    }

    if (!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha Inválido !'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Entre e Divirta-se!!</h3>
            <?php if ($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>        
            </form>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y'); ?>
    </footer>
    
</body>
</html>