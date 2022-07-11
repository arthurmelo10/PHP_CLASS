<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="post">
    <div>
        <label for="Linhas">Linhas: </label>
        <input type="text" name="linhas">
    </div>
    <div>
        <label for="Colunas">Colunas: </label>
        <input type="text" name="colunas">
    </div>
    <button>Enviar</button>
</form>
<pre>
    <?php
        $linhas = $_POST["linhas"];
        echo 'O valor de linhas é: ';
        print_r($linhas);
        $colunas = $_POST["colunas"];
        echo '<br>O valor de colunas é: ';
        print_r($colunas);
        $cont = 1;

        for ($i = 0; $i < $linhas; $i++) {
            //$matrix[$i] = $i + 1;
            for ($j = 0; $j < $colunas; $j++) {
                $matrix[$i][$j] = $cont;
                $cont ++;
            }
            //print_r($matrix);
        }
    ?>
    <table>
        <?php
            foreach ($matrix as $linha) {
                echo '<tr>';
                foreach ($linha as $valor) {
                    echo "<td>$valor</td>";
                }
                echo '</tr>';
            }
        ?>
    </table>

    <style>
        table {
            border: 1px solid #444;
            border-collapse: collapse;
            margin: 20px 0px;
        }

        table tr {
            border: 1px solid #444;
        }

        table td {
            padding: 10px 20px;
        }
    </style>
</pre>

