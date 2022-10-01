<div class="titulo">Include Função</div>

<?php

echo 'Carregando: include_funcao<br>';

function carregarArquivo(): void
{
    include('include_arquivo.php');

    echo 'variável = ' . $variavel . '<br>';
    echo 'soma(2,5) = '. soma(2,5) . '!<br>';
}

echo '
<pre>
function carregarArquivo(): void
{
    include("include_arquivo.php");

    echo variável = . $variavel;
    echo soma(2,5) = . soma(2,5);
}
</pre>';

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1,8);

/**
 * Nada é printado no browser pois a função soma pertence ao arquivo include_arquivo, 
 * que está sendo chamado dentro da função carregarArquivo();
 */

echo '
<pre>
/**
 * Nada é printado no browser pois a função soma pertence ao arquivo include_arquivo, 
 * que está sendo chamado dentro da função carregarArquivo();
 */
</pre>';

 echo '<hr>';
echo 'Chamando a função carregarArquivo(): ';
carregarArquivo();

echo "variável = '{$variavel}'!'<br>";

echo 'var_dump($variavel) = ';
var_dump($variavel);

echo '<br>a variavel foi definida dentro da função e não temos acesso fora do escopo da função
<br>Ela está restrita ao local em que o include foi invocado';

echo '<br>';

ECHO 'soma(3,8) = ' . soma(3,8) . '<br>';
ECHO 'A função soma, fica disponível após a chamada da função carregarArquivo<br>';

