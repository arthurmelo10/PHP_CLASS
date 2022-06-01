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
var_dump(intval(2.8));
echo '<br>';
var_dump(intval('11010101101', 2));
echo '<br>';
var_dump(intval(2.999999));
echo '<br>';
var_dump(round(2.8));
echo '<br>';
var_dump((int)round(2.8));

print("<p>Operações com String<br>");
var_dump(3 + '2');
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2); // concatenaao
echo '<br>', is_string("3" . 2);
//echo '<br>', is_string("3" * 2); // não é strinng, é um valor inteiro
echo '<br>';
var_dump(1 + 'cinco');
echo '<br>';
var_dump(1 + '5 cinco'); // pega a parte numérica da string
echo '<br>';
var_dump(1 + 'cinco 5');
echo '<br>';
var_dump(1 + '2 + 5');
echo '<br>';
var_dump(1 + '25');
echo '<br>';
var_dump(1 + '2.5');
echo '<br>';
var_dump(1 + '-3.2e2');
echo '<br>';
var_dump((int)'25.5');
echo '<br>';
var_dump((float)'25.5');
echo '<br>';
var_dump((int)'25.5'); // pegar a entrada de um usuário e fazer contas
echo '<br>';
var_dump( 3.2 + '25.5');