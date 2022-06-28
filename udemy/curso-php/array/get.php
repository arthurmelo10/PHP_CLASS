<div class="titulo">$_GET[]</div>

<?php
print('<b>Exemplo 1</b>');

echo '<br>'.$_GET;
echo '<br>';
print_r($_GET);
/**
 * Array vazio
 * Consigo colocar informações, passando os parâmetros da requisição tipo get
 * Os parâmetros de uma requisição do tipo get vem logo depois da url separados por um sinal de interrogação
 */ 

print('<p><b>Acessando um elemento do array $_GET</b>');
echo '<br>{$_GET["nome"]} = ';
echo "{$_GET['nome']}";
print('<br><b>Os parâmetros de uma requisição do tipo get vem logo depois da url separados por um sinal de interrogação.</b>');