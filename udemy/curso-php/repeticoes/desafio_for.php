<div class="titulo">Desafio For</div>

<!--
#
##
###
####
#####
Usar o for para gerar o retorno acima
1) Operações matemáticas - pode usar incremento
2) Sem usar operações de incremento
-->
<?php
print('
Usar o for para gerar o retorno abaixo:
    <br>#
    <br>##  
    <br>###
    <br>####
    <br>#####
<br>1) Operações matemáticas - pode usar incremento
<br>2) Sem usar operações de incremento
');

print('<p><b>Resposta 1:</b> 
<br>$a = ""
<br>for ($i=1; $i<=5; $i++) {
    <br>$a .= #;
    <br>echo $a;
<br>}');
$a = "";
for ($i=1; $i<=5; $i++) {
    $a .= '#';
    echo '<br>'.$a;
}

print('<p><b>Resposta 2:</b>
<br>for ($b = #; $b !== ######; $b .= #) {
    <br>echo "$b";
    <br>}
');
for ($b = '#'; $b !== '######'; $b .= '#') {
    echo "<br>$b";
}

echo '<br>$b fora do laço for: '.$b;

echo '<br>Utilizando a própria concatenação para ser as conndições do laço for';