<div class="titulo">Datas #01</div>

<?php

/**
 * Quantidade de segundos desde o marco zero do PHP => década de 70, meridiano de Greenwich
 */
echo 'time() = ' . time() . '<br>';


echo 'date(D, d \d\e M \d\e Y H:i A) = ' . date('D, d \d\e M \d\e Y H:i A') . '<br>';

echo 'strftime(%A, %d de %B de %Y, time()) = ' . strftime('%A, %d de %B de %Y', time()) . '<br>';

setlocale(LC_TIME, 'pt_BR', 'pt_BR');