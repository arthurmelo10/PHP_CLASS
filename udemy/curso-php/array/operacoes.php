<div class="titulo">Operações</div>

<?php
print('<b>Soma de Arrays</b><br>');

$dados_1 = [
    "nome" => "José",
    "idade" => 28,
];
echo '$dados_1 = ';
print_r($dados_1);

$dados_2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza",
];

echo '<br> $dados_2 = ';
print_r($dados_2);
echo'<br><b>Acrescentendo um elemento no array</b></br>';
$dados_2["Endereço"] = "Rua A";
echo '$dados_2["Endereço"] = '.$dados_2["Endereço"];
echo '<br>';
print_r($dados_2);
$dadosCompletos = $dados_2 + $dados_1;
echo '<br>$dadosCompletos = $dados_2 + $dados_1 = ';
print_r($dadosCompletos);
$dadosCompletos = array_merge($dados_2, $dados_1);
echo '<br> Outra forma: $dadosCompletos = array_merge($dados_2, $dados_1) = ';
print_r($dadosCompletos);
print(
    '<p>
        Função array_merge realiza a soma de arrays.
        <br>Quando existe sobreposição de índices, entre os arrays somados, na somatória direta, o valor do array da esquerda prevalece.
        Já na função array_merge, o valor do array da direita prevalece.</br>
    </p>'
);

echo '<hr>';

echo '<b>Função is_array() -> verifica se um determinado dados é um array</b>';
echo '<br>'. is_array($dadosCompletos);
echo '<br> var_dump(is_array($dadosCompletos)) = ';
var_dump(is_array($dadosCompletos));

echo '<hr>';

echo '<b>Função count() -> verifica quantos elementos um array possui</b>';
echo '<br>'. count($dadosCompletos);
echo '<br> var_dump(count($dadosCompletos)) = ';
var_dump(count($dadosCompletos));

echo '<hr>';

echo '<b>Função array_rand() -> pegar um índice do array de forma aleatória</b>';
echo '<br>'. $indice = array_rand($dadosCompletos);
echo "<br>$dadosCompletos[$indice]";
echo '<br> var_dump(array_rand($dadosCompletos)) = ';
var_dump(array_rand($dadosCompletos));

echo '<hr>';
echo '<b>Formas de interpolação com aspas duplas</b><br>';
echo '"$dadosCompletos[idade]" = '; // necessário o usoi de chaves
echo "$dadosCompletos";
echo '<br>';
echo '"{$dadosCompletos[idade]}" = ';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo '"${dadosCompletos[idade]}" = ';
echo "${dadosCompletos['idade']}";
// o uso de chaves permite que seja utilizado o índice como string

echo '<hr>';
echo '<b>Função unset() -> remover um elemento de um array</b>';
unset($dadosCompletos["nome"]);
echo '<br> unset($dadosCompletos["nome"]) = ';
print_r($dadosCompletos);
echo '<br> Array não apresenta mais o elemnto do índice nome. A função pode ser utilizar no array completo: ';
unset($dadosCompletos);
echo '<br> unset($dadosCompletos) = ';
print_r($dadosCompletos);
echo '<br> var_dump($dadosCompletos) = ';
var_dump($dadosCompletos);

echo '<hr>';
print('<p><b>Sobreposição de Arrays</b>');
$impares = [1,3,5,7,9];
echo '<br> $impares = ';
print_r($impares);
$pares = [0,2,4,6,8];
echo '<br> $pares = ';
print_r($pares);

$decimais = $pares + $impares;
echo '<br> $decimais = $pares + $impares = ';
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br> $decimais = array_merge($pares, $impares) = ';
print_r($decimais);
print(
    '<p>
        Para índices numéricos, o array_merge não realiza a sobreposição e sim, agrega os elementos do array da direita ao array da esquerda.</br>
        Já a somatória direta, realiza a sobreposição dos elementos do array da esquerda sobre os elementos do array da direita. <br>
    </p>'
);

echo '<b>Função sort() -> ordena os elementos de um array</b>';
sort($decimais);
echo '<br> sort($decimais) = ';
print_r($decimais);
// a função sort altera o array original, em outras linguagens o array original não é afetado, é gerado um novo array, com os elementos ordenados;
?>

<style>
    hr {
        margin: 2px;
    }
</style>
