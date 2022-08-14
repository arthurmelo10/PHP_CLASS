<div class="titulo">Map & Filter</div>

<?php
print('<b>Exemplo 1 - Forma mais manual</b><br>');

$notas = [5.8, 7.3, 9.8, 6.7];
echo '$notas = ';
print_r($notas);
echo '<br>Fazer uma função para arredondar as notas dos alunos</br>';

$notasFinais1 = [];
echo '$notasFinais1 = []';

foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}
echo '
<pre>
foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}
</pre>
';

echo '$notasFinais1 = ';
print_r($notasFinais1);

echo '<hr>';

print('<p><b>Exemplo 2 - Map</b><br>');

$notasFinais2 = array_map('round', $notas);

echo '$notasFinais2 = array_map("round", $notas)<br>';

echo '$notasFinais2 = ';
print_r($notasFinais2);


echo '<hr>';

print('<p><b>Exemplo 3</b><br>');

/**
 *foreach ($notas as $nota) {if () {}} 
*/
