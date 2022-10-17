<?php
namespace Desafio;
?>

<div class="titulo">Desafio Namespace</div>

<?php
echo 'Namespaces relacionados no desafio: <br>';
echo __NAMESPACE__ . '<br>';

require_once('usuario.php');

echo '<hr>';

use Desafio\Usuario\Usuario as User;
echo 'use Desafio\Usuario\Usuario as User<br>';

echo 'Instanciado um novo usuário<br>';
$usuario = new User('Arthur', 27, 'abmelo');
echo '$usuario = new User(Arthur, 27, abmelo): ';
echo '<br>';

echo '$usuário->apresentar(): <br>';
echo $usuario->apresentar();

echo '<hr>';

echo 'Instanciado um novo usuário<br>';
$usuario_2 = new User('Jullia', 18, 'lordi');
echo '$usuario_2 = new User(Jullia, 18, lordi)';
echo '<br>';

echo '$usuário_2->apresentar(): <br>';
echo $usuario_2->apresentar();





