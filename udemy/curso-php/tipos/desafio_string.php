<div class="titulo">Desafio String</div>

<?php
print("Avaliando os métodos da documentação string, qual os métodos que a posição 'abc' na string '!AbcaBcabc' retorne 1?");

$vetor = '!AbcaBcabc';
$teste = strpos($vetor, 'abc');
print($teste);

$pos = stripos($vetor, 'abc');
print($pos);

print(strpos(strtolower($vetor), 'abc'));