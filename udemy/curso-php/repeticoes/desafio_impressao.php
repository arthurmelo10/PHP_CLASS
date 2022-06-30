<div class="titulo">Desafio Impressão</div>

<?php
print('<b>Imprima apenas os valores do array que contém índice par
<br> Desafio Adicional: Resolver com for e foreach
<br> Valores esperados: "AAA", "CCC", "EEE"
</b>');
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];
ECHO '<br> $array = ';
print_r($array);

echo '<p>For:';
ECHO 
'<br><b>
    for ($i = 0;;$i++) {
        <br>if ($i % 2 === 1) {continue;}
        <br>if ($i > count($array)) {break;}
        <br>echo "$array[$i]";
        <br>}
</b>';

for ($i = 0;;$i++) {
    if ($i % 2 === 1) {
        continue;
    }
    if ($i > count($array)) {
        break;
    }
    echo "<br>$array[$i]";
}

echo '<p>FOREACH: ';
ECHO 
'<br><b>
foreach ($array as $indice => $valor) {
    <br>if ($indice % 2 !== 0) {continue;}
    <br>if ($indice > count($array)) {break;}
    <br>echo "$valor";
    <br>}    
</b>';

foreach ($array as $indice => $valor) {
    if ($indice % 2 !== 0) {
        continue;
    }
    if ($indice > count($array)) {
        break;
    }
    echo "<br>$valor";
}
