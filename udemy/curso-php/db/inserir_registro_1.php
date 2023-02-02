<div class="titulo">Inserir Registro 1</div>
<pre>
    <?php

    require_once "conexao.php";

    $sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Andre Miranda',
        '1999-09-01',
        'miranda_andre@yahoo.com',
        'https: //mirandaandre.io',
        0,
        19980.12 
    )";


    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if ($resultado) {
        echo "Sucesso";
    } else {
        echo "Erro" . $conexao->error;
    }

    //print_r(get_class_methods($conexao));

    $conexao->close();
    ?>
</pre>