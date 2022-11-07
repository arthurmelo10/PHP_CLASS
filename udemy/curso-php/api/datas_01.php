<div class="titulo">Datas #01</div>

<?php

/**
 * Quantidade de segundos desde o marco zero do PHP => década de 70, meridiano de Greenwich
 */
echo 'time() = ' . time() . '<br>';

/**
 * Função para data
 */
echo 'date(D, d \d\e M \d\e Y H:i A) = ' . date('D, d \d\e M \d\e Y H:i A') . '<br>';

/**
 * Setar a localização
 * Setar o idioma que será utilizado
 */
echo 'setlocale(LC_TIME, pt_BR, pt_BR.utf-8) = ' . setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8') . '<br>';

/**
 * Outra função para apresentar formatar a data
 */
echo 'strftime(%A, %d de %B de %Y, time()) = ' . strftime('%A, %d de %B de %Y', time()) . '<br>';

/**
 * Uma vez que eu tenho a função time retornando a quantidade de segundos, posso acrescentar  dias, horas, semanas
 */

echo '<hr>';

echo '<b>Acréscimo de um dia: </b><br>';

 echo '$amanha = time() + (24 * 60 * 60)' . $amanha = time() + (24 * 60 * 60) . '<br>'; 
echo 'strftime(%A, %d de %B de %Y, $amanha) = ' . strftime('%A, %d de %B de %Y', $amanha) . '<br>';

echo '<hr>';

echo '<b>Acréscimo de uma semana: </b><br>';
echo '$proximaSemana = strtotime(+1 week)'. $proximaSemana = strtotime('+1 week') . '<br>';

echo 'strftime(%A, %d de %B de %Y, $proximaSemana) = ' . strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

echo '<hr>';
echo '<b>Printando uma data específica: </b><br>';
echo '$dataFixa = mktime(00, 05, 00, 05, 22, 1995) ' . $dataFixa = mktime(00, 05, 00, 05, 22, 1995) . '<br>';
echo strftime('%A, %d de %B de %Y - %H:%m:%S', $dataFixa);
