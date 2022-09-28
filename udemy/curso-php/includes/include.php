<div class="titulo">Includes</div>

<?php
echo 'Executei essa linha do arquivo include<br>';

include('include_arquivo.php');
/**
 * A partir do include, temos acesso a função e a variável que foi criada no arquivo que está sendo chamado 
 */
echo '<p>A partir do include, temos acesso a variável e a função que foi criada no arquivo que está sendo chamado</p>';
//include('include_arquivo.php');
echo 'Chamando a função do arquivo que está sendo incluído: <br>';
echo 'soma(3,8)-> ';
echo soma(3,8);
echo '<br>';
echo "O conteúdo da variável é {$variavel}";
/**
 * O grande problema é redefinir a função soma dentro do mesmo escopo
 * Chamar a mesma função mais de uma vez
 */
echo '<p>
O grande problema de chamar o mesmo arquivo duas vezes é redefinir a função soma dentro do mesmo escopo <br>
Chamar a mesma função mais de uma vez
</p>';

echo 'Proteger a redefinição com um teste';

echo '
<pre>
if (!function_exists(soma)) {
    function soma($a, $b)
    {
        return $a + $b;
    }
}
</pre>';

