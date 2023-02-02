<div class="titulo">PDO: Consultar</div>

<pre>
    <?php
        require_once "conexao_pdo.php";

        $conexao = novaConexaoPDO();

        $sql = "SELECT * FROM cadastro";
        /**
         * Passar qual o tipo de retorno que eu quero, por exemplo:
         * PDO::FETCH_NUM => somente os números
         * PDO:FETCH_ASSOC => somente índices com nomes
         * PDO::FETCH_CLASS => RETORNO EM CLASSE
         * PDO::FETCH_BOTH => TANTO O array numérico como o associativo
         */
        $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        print_r($resultado);

        echo "<hr>";

        /**
         * LIMIT = QUANTIDADE DE REGISTROS que serão retornados na consulta
         * OFFSET = registro que será o primeiro a ser retornado (caso não seja especificado, o retorno será iniciado a partir do primeiro registro)
         */
        $sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':qtde', 2, PDO::PARAM_INT); // se não colocar PARAM_INT, o dado será do tipo inteiro
        $stmt->bindValue(':inicio', 3, PDO::PARAM_INT); // passagem de parâmetros

        if ($stmt->execute()) {
            $resultado = $stmt->fetchAll();
            print_r($resultado);
        } else {
            echo "Código: ". $stmt->errorCode();
            print_r($stmt->errorInfo());    
        }

        //print_r(get_class_methods($conexao));
        
        echo "<hr>";

        /**
         * Obter determinado elemento pelo ID
         */

        $sql = "SELECT * FROM cadastro WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        //$stmt->bindValue(':id', 1, PDO::PARAM_INT);
        // if ($stmt->execute([14])) {
        //if ($stmt->execute()) {
        if ($stmt->execute([':id' => 15])) {
            $resultado = $stmt->fetch(); //somente um úninco registro
            print_r($resultado);
        } else {
            echo "Código: ". $stmt->errorCode();
            print_r($stmt->errorInfo());    
        }

    ?>
</pre>