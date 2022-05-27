<div class="titulo">Operações Aritméticas</div>

<?php

echo '<p>Tipos de Operação</p>';
echo 1+1, '<br>'; // inteiros soma
echo 1+2.5, '<br>'; // inteiros e float
echo 10 - 2, '<br>'; // inteiros subtração
echo 2 * 5, '<br>'; // inteiros multiplicação
echo 7/4, '<br>'; // inteiros divisão
echo intdiv(7, 4), '<br>';
echo (int) (7 / 4), '<br>';
echo round(7/4), '<br>';
echo 7%4;

echo '<p>Formas de obeter valor</p>';
var_dump(1+1);
echo '<br>';
var_dump(10 - 2);
echo '<br>';
var_dump(2 * 5);
echo '<br>';
var_dump(7/4);// mesmo sendo uma operação entre inteiros o resultado final é um float
echo '<br>';
var_dump(1+2.5);
echo '<br>';
var_dump(intdiv(7, 4));
echo '<br>';
var_dump((int) (7 / 4));