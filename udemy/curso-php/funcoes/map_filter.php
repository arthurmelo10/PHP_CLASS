<div class="titulo">Map & Filter</div>

<?php
print('<b>Exemplo 1 - Map de forma mais manual</b><br>');

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

print('<p><b>Exemplo 3 - Filter de forma "manual"</b><br>');

$apenasAprovados1 = [];
echo '$apenasAprovados1 = ';
var_dump($apenasAprovados1);

foreach ($notas as $nota) {
    if ($nota >=7) {
        $apenasAprovados1[] = $nota;
    }
}

echo '
<pre>
foreach ($notas as $nota) {
    if ($nota >=7) {
        $apenasAprovados1[] = $nota;
    }
}
</pre>';

echo '<br>';
echo '$apenasAprovados1 = ';
print_r($apenasAprovados1);

echo '<hr>';

print('<p><b>Exemplo 4 - Filter</b><br>');


function aprovados($nota): bool
{
    return $nota >= 7;
}

echo '
<pre>
function aprovados($nota): bool
{
    return $nota >= 7;
}
</pre>';

echo '<br>';

$apenasAprovados2 = array_filter($notas, 'aprovados');
echo '$apenasAprovados2 = array_filter($notas, "aprovados")';
echo '<br>';
echo '$apenasAprovados2 = ';
print_r($apenasAprovados2);

echo '<hr>';

print('<p><b>Exemplo 5 - Map cpm uma função própria</b><br>');

function calculoLegal ($nota)
{
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
echo '
<pre>
function calculoLegal ($nota)
{
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
</pre>';
echo '<br>';

$notasFinais3 = array_map('calculoLegal', $notas);
echo '$notasFinais3 = array_map("calculoLegal", $notas)';
ECHO '<br>';
echo '$notasFinais3 = ';
print_r($notasFinais3);

echo '<p>
o próprio php faz todas as operações, for, foreach e if.
<br>Função de transformação para o map ou função para o filter.
<br>Estas funções sempre retornam um array novo.
';

// o próprioo php faz todas as operações, for, foreach e if
// Função de transformação ou função para o filter
// Sempre retornam um array novo