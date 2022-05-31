<div class="titulo">Conversões de Tipos</div>

<?php
echo is_int(PHP_INT_MAX);

// INT PARA FLOAT
print("<p>Int para Float<br>");
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1+ 1.0);
echo '<br>';
var_dump((float) 3);


print("<p>Int para Float<br>");
echo var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.8, 10));