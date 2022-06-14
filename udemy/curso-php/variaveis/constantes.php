<div class="titulo">Constantes</div>

<?php
print('<b>Exemplos de declaração de constantes</b><br>');
define('TAXA_DE_JUROS', 5.9);
echo 'Declaração com a função <b>define</b>: ' . TAXA_DE_JUROS;
echo '<br> Tentando declarar com $'. $TAXA_DE_JUROS . '!';

/**
 * TAXA_DE_JUROS = 2.5; // php não permite alterar o valorde uma consntante já declarada e com valor definida
*/

const NOVA_TAXA = 2.5;
echo '<br> Declaração com a palavra <b>const</b>: ' . NOVA_TAXA;

$valorVariavel = 2.8;
/**
 * const NOVISSIMA_TAXA = $valorVariavel; // PHP não permite atribuir a unma constante um valor variável
*/
const NOVISSIMA_TAXA = 2.8 + 1.2;
ECHO '<br>Atribuindo o valor de uma operação aritmética, via palavra <b>const</b>: ' . NOVISSIMA_TAXA;

define('NOVISSIMA_TAXA_1', $valorVariavel);
ECHO '<br>Atribuindo o valor de uma constante, a parte de uma variável, via função <b>define</b>: ' . NOVISSIMA_TAXA_1;

ECHO '<p><b>Exemplos de constantes próprias do PHP</b>';
echo '<br> Versão do PHP: '. PHP_VERSION;
echo '<br> Maior Inteiro: '. PHP_INT_MAX;
echo '<br> Mínimo Inteiro: '. PHP_INT_MIN;
// constantes com duplo uderline 
echo '<br> Linha: ' . __LINE__; 
echo '<br> Arquivo: ' . __FILE__;
echo '<br> Diretório: '  . __DIR__;
ECHO '<br> Classe: ' . __CLASS__;
//__DIR__ = 'opa';

print('<p><b>Uma vez definida a constante, seu valor não pode ser alterado no algoritmo</b><br>');
print('<br><b>Duas formas de fazer a declaração, com const, para valores literais, e com define, que permite uma flexibilidade maior, inclusive para com o uso de variáveis para a definição do valor da constante.</b></br>');