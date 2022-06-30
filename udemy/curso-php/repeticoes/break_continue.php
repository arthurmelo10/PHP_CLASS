<div class="titulo">Break and Continue</div>

<?php
/**
 * Palavras reservadas no php que servem para alterar o fluxo dos passos de uma sequência de repetições, por exemplo 
 */
echo '
    <b>
        Palavras reservadas no php que servem para alterar o fluxo dos passos de uma sequência de repetições, por exemplo
    </b>
    <br>Fazem que determinada repetição seja interrompida e vá para a sequência do código <b>(continue)</b>
    <br> Quando um <b>break</b> é encontrado, o algoritmo sai do contexto que o break foi inserido 
';
print('<p><b>Exemplo 1 - FOR</b><br>');
echo '<b>BREAK: </b>';
$cont = 16;
echo '<br>$cont = '.$cont;
echo '<br> for (;;) {
    <br> echo "$cont";
    <br>$cont++;
    <br>if ($cont > 20) {break;}
    <br>} ';
echo '<br>';
for (;;) {
    echo "$cont<br>";
    $cont++;
    if ($cont > 20) {
        break;
    }
}

echo "FIM !!";

echo '<br><b>CONTINUE: </b></br>';
echo '
for (;;) {
    <br>$cont++;
    <br>if ($cont % 2 === 1) {continue;}
    <br>echo "$cont";
    <br>if ($cont >= 30) {break;}
    <br>}
    <br>';

for (;;) {
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if ($cont >= 30) {
        break;
    }
}

echo "FINAL !!";

print('<p><b>Exemplo 2 - ForEach</b><br>');
echo '
foreach ([1,2,3,4,5,6] as $valor) {
    <br>if ($valor === 5) {break;}
    <br>if  ($valor % 2 === 0) {continue;}
    <br>echo "$valor";
    <br>}
    <br>';
foreach ([1,2,3,4,5,6] as $valor) {
    if ($valor === 5) {
        break;
    }
    if  ($valor % 2 === 0) {
        continue;
    }
    echo "$valor <br>";
}

echo "END !!";

/**
 * TENTARIA NÃO USAR BREAK E CONTINUE NA MAIORIA DOS CENÁRIOS 
 * Tentaria ter lógicas mais simples
 * Podem trazer maior complexidade
 * Caminho da simplicidade é sempre o mais indicado
 */


