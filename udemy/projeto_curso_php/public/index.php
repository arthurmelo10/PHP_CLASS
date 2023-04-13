
<?php

require_once(dirname(__FILE__, 2) . '/src/Config/config.php');
// require_once(VIEW_PATH . '/login.php');

require_once(MODEL_PATH . '/Login.php');

$login = new Login([
    'email' => 'quico@cod3r.com.br',
    'password' => 'a'
]);

try {
    $login->checkLogin();
    echo "Deu certo !";
} catch (Exception $e) {
    echo "Problema de login";
}

// $user = new User (
//     [
//         'name' => 'Lucas',
//         'email' => 'lucas@cod3r.com.br',
//     ]
// );

//print_r($user->get('name'));

//print_r($user);

// $user->email = 'lucas_alterado@cod3r.com.br';

/**
 * Internamente, os métodos mágicos são utilizados neste formato
 */

 //echo $user->getSelect();

//  echo User::getSelect(['name' => 'Chaves']);
//  echo User::getSelect(['id' => 1], 'name, email');

// print_r(User::get(['name' => 'Chaves'], 'id, name, email'));

// echo '<br>';

// foreach (User::get([], 'name') as $user) {
//     echo $user->name;
//     echo '<br>';
// }

// echo '<br>';

//print_r(User::get());
