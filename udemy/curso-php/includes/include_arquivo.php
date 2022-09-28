<?php

echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';
echo 'variavel = Estou definida';

if (!function_exists('soma')) {
    function soma($a, $b)
    {
        return $a + $b;
    }
}
echo '<pre>
    function soma($a, $b)
    {
        return $a + $b;
    }
</pre>';

/**
 * Proteger a redefinição com um teste
 */

