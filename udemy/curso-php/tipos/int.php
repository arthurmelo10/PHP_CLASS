<div class="titulo">Tipo Inteiro</div>

<?php
echo 11;
echo '<br>';

echo '<p>Formas de obter informações dos valores</p>';
var_dump(11);
echo '<br>';

echo '<div><p>Valores Máximo e Mínimo</p></div>';
echo PHP_INT_MAX, '<br>'; // valor máximo inteiro
echo PHP_INT_MIN, '<br>'; // valor mínimo inteiro

echo '<div><p>Base Octal</p></div>';
echo 011, '<br>';
echo 017, '<br>'; // base octal

echo '<div><p>Base Binária</p></div>';
echo 0b11, '<br>'; // base binária
echo 0b11000011111, '<br>'; // base binária -> somente 0 e 1

echo '<div><p>Base Hexadecimal</p></div>';
echo 0x11, '<br>'; // base hexadecimal
echo 0x117acf0ddd, '<br>'; // base hexadecimal


