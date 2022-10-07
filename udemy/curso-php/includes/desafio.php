<div class="titulo">Desafio Include/Require</div>

<?php
require_once('usuario.php');

echo 'Instanciado um novo usuário<br>';
$usuario = new Usuario('Arthur', 27, 'abmelo');
echo '<br>';

echo '$usuário->apresentar(): <br>';
echo $usuario->apresentar();

echo '<hr>';

echo 'Instanciado um novo usuário<br>';
$usuario_2 = new Usuario('Jullia', 18, 'lordi');
echo '<br>';

echo '$usuário_2->apresentar(): <br>';
echo $usuario_2->apresentar();



