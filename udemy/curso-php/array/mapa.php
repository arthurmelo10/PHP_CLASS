<div class="titulo">Mapa</div>

<?php
print('<b>Exemplo 1</b><br>');
echo 'Os índices de arrays podem ser chamados de chaves, e podem assumir o valor que o programador necessitar<br>';
$lista = array(1,2,3.4,"texto");
echo '<br> print_r = ';
print_r($lista);
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8,
);
echo '<br> print_r = ';
print_r($dados);
echo '<br> $dados[idade] = '.$dados["idade"];
echo '<br> var_dump($dados["idade"]) = ';
var_dump($dados["idade"]); 
echo '<br><b>Índice inexistentes</b>';
echo '<br> $dados[0] = '.$dados[0];
echo '<br> var_dump($dados[0]) = ';
var_dump($dados[0]); // não existe
echo '<br> $dados["outra_informacao"] = '.$dados["outra_informacao"];
echo '<br> var_dump($dados["outra_informacao"]) = ';
var_dump($dados["outra_informacao"]); // não existe

print('<p><b>Misturando os índices</b><br>');
$lista = [
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h",
];
print_r($lista);
echo '<br> $lista[5] = '.$lista[5];
echo '<br> var_dump($dados[5]) = ';
var_dump($dados[5]); // não existe
echo '<br> $lista[1] = '.$lista[1];
echo '<br><b>Não faz sentido misturar as duas formas de organizar um array</b>';

print('<p><b>Acrescentando valores</b><br>');
$lista[5] = "AAAAAAAAA";
echo '$lista[5] = '.$lista[5];
$lista[] = "i"; // valor é acrescentado no próximo índice após o último índice preenchido
echo '<br> $lista = ';
print_r($lista);
$lista[false] = 'tentei indexar com false!'; // indexa no elemento 0
echo '<br> $lista = ';
print_r($lista);
$lista[true] = 'tentei indexar com true!'; // indexa no elemento 1
echo '<br> $lista = ';
print_r($lista);
//Não faz muito sentido, traz mais confusão que solução;
