<div class="titulo">Switch Case</div>

<?php
print('<b>Exemplo 1 - Categorias de Carros (Modelo If/Else) </b><br>');
$categoria = 'SUV';
echo '$categoria = '.$categoria;
$preco = 0.0;
echo '<br>$preço = '.$preco;
$carro = '';
echo '<br>$carro = '.$carro;

if ($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegate';
    $preco = 80000;
} else if ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<br>Carro: $carro <br>Preço: R$ $precoFormatado</p>";
print('<b>Exemplo de seleção múltipla, com vários casos ce if/else aninhados </b><br>');
echo'<hr>';
/**
 * Outro Exemplo
 */
print('<br><b>Exemplo 2 - Categorias de Carros (Modelo Refatorado com switch) </b><br>');
$categoria = 'LUXO';
echo '$categoria = '.$categoria;
switch (strtolower($categoria)) { // uso do strtolower dá liberdade de escrita para o usuário, não é necessário ser idêntico à string do case
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break; //causa a saída do bloco switch
    case 'suv':
    case 'suv Básico': // mais de um case associado ao mesmo conjunto de sentença, ocnjunto de código
        $carro = 'Renegate';
        $preco = 88000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default: // representa o último else 
        $carro = 'Mobi';
        $preco = 33000;
        break;
}
$precoFormatado = number_format($preco, 2, ',', '.');
echo "<br>Carro: $carro <br>Preço: R$ $precoFormatado</p>";
print('<p><b>Sem o break, cai em um comportamento que a estrutura switch executa todos os cases a partir do primeiro que ele encontrou, a partir do input do usuário.
Neste sentido, o valor das variáveis é substituído e o último será exibido, de acordo com a codificação realizada. </b><br>');
echo'<hr>';
print('<p><b>A expressão dentro de uma estrutura if/else vai retornar verdadeiro ou falso.
No switch não. É passado um determinado valor(string, float, inteiro), e com este valor, vai entrar no case que representa aquele valor
O valor passado não é verdadeiro ou falso</b>');
