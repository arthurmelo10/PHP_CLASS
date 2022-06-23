<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
echo '$nomes = ';
print_r($nomes);

print('<p><b>Como fazer para imprimir a cada atualização da página imprimir o nome de uma das princesas?</b>');

$index = array_rand($nomes);
echo '<div center><h1>Sorteio = '.$nomes[$index]. '</h1></div>';

print("<b>Fazendo uso da função array_rand()</b>");
?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>