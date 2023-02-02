<div class="titulo">PDO: Excluir</div>

<?php
    
    require_once "conexao_pdo.php";

    $conexao = novaConexaoPDO();

    $sql = "DELETE FROM cadastro WHERE id = ?";

    $stmt = $conexao->prepare($sql);
    //$stmt->bindValue(':id', 13, PDO::PARAM_INT);

    if ($stmt->execute([15])) {
        echo "Registro Excluído";
    } else {
        echo "Código: " . $stmt->errorCode(). "<br>";
        print_r($stmt->errorInfo());
    }






