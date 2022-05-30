<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo "<p><b> Concatenação </b></p>";
echo '<br>', "Nós também" . 'somos', '<br>';
echo "Nós também" . ' somos', '<br>';
echo ("Número é " . 123);
echo '<br>', "Também aceito", " vírgulas", '</br>';


//pode alternar qual delimitador
echo '<br>';
echo "'teste'". '"Teste"' . '\'teste\'' . "\"Teste\"" . "\\";
echo '<br>';

print ("<p><b>Função Print</b></p>");
print ("<br> Também existe a função print");
echo '<br>';

// Algumas funções
print ("<p><b>Funções String</b></p>");
echo '<br>' . strtoupper('strtoupper');
echo '<br>' . strtolower('STRTOLOWER');
echo '<br>' . ucfirst('ucfirst');
echo '<br>' . ucwords('todas as palavras - ucwords');
echo '<br>' . strlen('Quantas Letras?');
echo '<br>' . mb_strlen('Eu também','utf-8'); // podemos passar o encode para calcular de forma correta
echo '<br>' . substr('Só uma parte mesmo', 7 , 6); // somente uma parte do texto será selecionado
echo '<br>' . substr('Só uma parte mesmo - substr', 7);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso - str_replace');