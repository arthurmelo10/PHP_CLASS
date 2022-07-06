<div class="titulo">While/Do While</div>

<?php
print('São variações um do outro.
<br>While é parecido com o for, a expressão está no início do laço, que será executado enquanto a expressão for verdadeira. Não é de conhecimento exato quantas repetições serão realizadas.
<br>Do While a expressão está depois do bloco, e só no final da primeira execução vai verificar se deve continuar ou não.
<br>FOR é pensando quando temos noção de quantidade de repetições');

print('<p><b>Exemplo 1 - while</b>');

const VALOR_LIMITE = 5;
echo '<br>const VALOR_LIMITE = 5';
$cont = 0;
echo '<br>$cont = 0';
echo '<br>while ($cont < VALOR_LIMITE) {
    <br>echo "while $cont";
    <br>$cont++;
}';

while ($cont < VALOR_LIMITE) {
    echo "<br>while $cont";
    $cont++;
}

echo '<br> Exemplo com FOR';
for ($cont = 0;$cont < VALOR_LIMITE;) {
    echo "<br>for $cont";
    $cont++;
}

print('<p><b>Exemplo 2 - do while</b>');

const VALOR_LIMITE_2 = 5;
echo '<br>const VALOR_LIMITE_2 = 5';
$cont = 10;
echo '<br>$cont = 10';
echo '<br> do {
    <br>echo "do-while $cont";
    <br>$cont++;
}
<br>while ($cont < VALOR_LIMITE)';

do {
    echo "<br>do-while $cont";
    $cont++;
} while ($cont < VALOR_LIMITE);

print('<p><b>Exemplo 3 - laço infinito - uso de break e continue</b>');
$contador = 0;
echo '<br> $contador = '.$conntador;
echo '
<br>while (true) {
    <br>echo "while(true) $contador";
    <br>$contador++;
    <br>if($contador >= VALOR_LIMITE) { break; }
    <br>}
';
while (true) {
    echo "<br>while(true) $contador";
    $contador++;
    if($contador >= VALOR_LIMITE) {
        break; // break e continnue funcionam dentro do contexto do while e dentro do contexto do for, com o mesmo comportamento
    }
}
