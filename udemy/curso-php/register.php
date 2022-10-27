 <?php
session_start();

require_once 'usuarios.php';

$novoUsuario = [];
$novoUsuario['nome'] = $_POST['nome'];
$novoUsuario['email'] = $_POST['email'];
$novoUsuario['senha'] = $_POST['senha'];

$usuarios[] = $novoUsuario;
$_SESSION['usuario'] = $novoUsuario['nome'];

if ($_SESSION['usuario']) {
    header('Location: index.php');
}

if (!$_SESSION['usuario']) {
    $_SESSION['erros'] = ['Insira os dados solicitados'];
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
<body>
<header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Cadastre-se</h3>
            <?php if ($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
            <div>
                    <label for="nome">Nome Completo:</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button class="entrar">Entrar</button>
            </form>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y'); ?>
    </footer>
</body>
</html>