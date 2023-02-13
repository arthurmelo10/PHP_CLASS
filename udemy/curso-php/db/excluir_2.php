<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="titulo">Excluir Registro do Banco - 2</div>

<?php
    require_once "conexao.php";

    $conexao = novaConexao();
    $registros = [];

    if ($_GET['excluir']) {
        $excluirSQL = "DELETE FROM cadastro WHERE id = ?"; // não fazer uma interpolação ou concatenação, é muito perigoso
        $statement = $conexao->prepare($excluirSQL); // evita o sql injection, 
        $statement->bind_param("i", $_GET['excluir']); // rever explicação
        $statement->execute(); // rever explicação
    }

    $sql = "SELECT id,nome,email,nascimento FROM cadastro";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }
    } else if ($conexao->error) {
        echo "Error: ". $conexao->error;
    }

    //print_r($registros);

    $conexao->close();
?>   

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) : ?>
            <tr>
                <td><?=$registro['id'] ?></td>
                <td><?=$registro['nome'] ?></td>
                <td><?=$registro['email'] ?></td>
                <td>
                    <?=
                        date('d/m/Y',strtotime($registro['nascimento'])) 
                    ?>
                </td>
                <td>
                    <a href="/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id']?>" class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>