<div class="titulo">Desafio Busca Recursiva</div>

<?php
print('<b>Percorrer o array abaixo de forma recursiva e Adicionar um símbolo de maior que, baseado na "profundidade" que o número está inserido</b><br>');

$array = [
    1, 
    2, 
    [
        3, 
        4, 
        5
    ], 
    6, 
    [
        7, 
        [
            8, 
            9,
        ]
    ], 
    10
];
echo '<pre>$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10]</pre>';


/**
 * $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10]
 * Percorrer os elementos de forma recursiva
 * Adicionar um símoblo de maior que baseado na profundidade que o número está
 * > 1
 * > 2
 * >> 3
 * >> 4
 * >> 5
 * > 6
 * >> 7
 * >>> 8
 * >>> 9
 * > 10
 */

 function map($array, $nivel = '>')
 {
    //for ($i = 0; $i < count($array); $i++) {
    //    if (is_array($array[$i])) {
    //        map($array[$i]);
            //$n = json_encode($array[$i]);
            //echo "$n<br>";    
    //    }
        //$valor = json_encode($array[$i]);
        //echo "$valor<br>";
    //    echo "$array[$i]<br>";
    //};
    foreach ($array as $value) {
        
        if (!is_array($value)) {
            echo "$nivel $value<br>";
        }    
        map($value, $nivel . $nivel[0]);
    }
 }

 echo ' <br> <strong>Solução Proposta AJUSTADA !!!:</strong> 
 <pre>
 function map($array, $nivel = >)
 {
    foreach ($array as $value) {
        
        if (!is_array($value)) {
            echo "$nivel $value";
        }    
        map($value, $nivel . $nivel[0]);
    }
 }
 </pre>';

echo 'Chamando a função map($array): <br>';
map($array);

echo '<hr>';

echo '<p><b>Solução Proposta Professor</b><br>';

function imprimirArray($array, $nivel = '>')
{
    foreach ($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

echo 
'<pre>
function imprimirArray($array, $nivel = >)
{
    foreach ($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento";
        }
    }
}
</pre>';

echo 'Chamando a função imprimirArray($array): <br>';
imprimirArray($array);
eCHO '<br><strong>A condição de parada é justamente o elemento não ser Array !!!<strong>';

