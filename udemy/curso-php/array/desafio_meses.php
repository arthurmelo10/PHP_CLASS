<div class="titulo">Desafio Meses</div>

<?php
$meses = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
];
//echo '<br>';
print_r($meses);
print('<p><b>Como fazer para os índices de cada mês, ser o "mesmo" da vida real?</b>');
$meses = [
    1 => "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
];
echo '<br>';
print_r($meses);
echo '<br> Janeiro = '.$meses[1];
echo '<br> Fevereiro = '.$meses[2];
echo '<br> Março = '.$meses[3];
echo '<br> Abril = '.$meses[4];
echo '<br> Maio = '.$meses[5];
echo '<br> Junho = '.$meses[6];
echo '<br> Julho = '.$meses[7];
echo '<br> Agosto = '.$meses[8];
echo '<br> Setembro = '.$meses[9];
echo '<br> Outubro = '.$meses[10];
echo '<br> Novembro = '.$meses[11];
echo '<br> Dezembro = '.$meses[12];

print("<br><b>Colocando o índice 1, no primeiro elemento, automaticamente, os demais elementos assumiram os índices subsequentes, e assim os meses terão os índices iguais aos da vida real.</b>");