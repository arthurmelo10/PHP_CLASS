<div class="titulo">Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
echo '$formatoData1: ' . $formatoData1 . '<br>'; 
$formatoData2 = '%A, %d de %B de %Y';
echo '$formatoData2: ' . $formatoData2 . '<br>';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';
echo '$formatoDataHora: ' . $formatoDataHora . '<br>';

echo '<hr>';

$agora = new DateTime();
echo '$agora = new DateTime() <br>';
/**
 * Objeto tem informações de fuso horário, hora atual, dia
 */

print_r($agora);

echo '<hr>';


setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
echo '$agora->format($formatoData1): ' . $agora->format($formatoData1). '<br>';
echo 'strftime($formatoData2, $agora->getTimestamp()): ' . strftime($formatoData2, $agora->getTimestamp()) . '<br>';

echo '<hr>';

$amanha = new DateTime('+3 day');
echo '<p><b>Outra forma de acrescentar ou retirar dias da data atual</b></p>';
echo '$amanha = new DateTime("+3 day") <br>';
echo 'strftime($formatoData2, $amanha->getTimestamp()) = ' . strftime($formatoData2, $amanha->getTimestamp()) . '<br>';
$amanha->modify('+1 day');
echo '$amanha->modify("+1 day") <br>';
echo 'strftime($formatoDataHora, $amanha->getTimestamp()): ' . strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';
$amanha->setDate(2021, 11, 27);
echo '<p>Formas de setar uma data específica</p>';
echo '$amanha->setDate(2021, 11, 27) <br>';
echo 'strftime($formatoDataHora, $amanha->getTimestamp()): ' . strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

echo '<hr>';

$dataFixa = new DateTime('1995-05-22 00:05:00');
echo '<p><b>Passando uma data específica no construtor</b></p>';
echo '$dataFixa = new DateTime(1995-05-22 00:05:00) <br>';
echo 'strftime($formatoDataHora, $dataFixa->getTimestamp()): ' . strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

echo '<hr>';
echo '<p><b>Comparação de Datas</b></p>';
$dataPassada = new DateTime('2006-01-30');
echo '$dataPassada = new DateTime("2006-01-30") <br>';
$dataFutura = new DateTime('2036-05-16');
echo '$dataFutura = new DateTime("2036-05-16") <br>';
$outraData = new DateTime('2036-05-16');
echo '$outraData = new DateTime("2036-05-16") <br>';
echo '$amanha > $dataPassada ? "Maior" : "Menor" = ';
echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>'; 
echo '$amanha > $dataFutura ? "Maior" : "Menor" = ';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo '$outraData == $dataFutura ? "Igual" : "Diferente" = ';
echo ($outraData == $dataFutura ? 'Igual' : 'Diferente') . '<br>';
echo '$outraData === $dataFutura ? "Igual" : "Diferente" = ';
echo ($outraData === $dataFutura ? 'Igual' : 'Diferente') . '<br>';

echo '<hr>';
echo '<p><b>Alterando timezone</b></p>';
$tz = new DateTimeZone('America/Sao_Paulo');
echo '$tz = new DateTimeZone("America/Sao_Paulo") <br>';
$agora = new DateTime( '', $tz);
echo '$agora = new DateTime( "", $tz) <br>';
echo '$agora->format("d/M/Y H:i:s") = ' . $agora->format('d/M/Y H:i:s');
