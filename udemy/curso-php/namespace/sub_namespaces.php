<?php namespace App; ?>

<div class="titulo">Sub Namespaces</div>

<?php

echo 'Namespace atual: '.__NAMESPACE__.'<br>';

/**
 * Tudo que for definido a partir de agora, será no namespace App
 */

const CONSTANTE = 123;

echo '\App\CONSTANTE = '. \App\CONSTANTE. '<br>'; 
echo 'Devemos usar o caminho absoluto para pegar o valor da constante no namespace atual<br>';

echo '<hr>';

namespace App\Principal;
/**
 * Namespace, em projetos reais, normalmente está relacionado com a estrutura de arquivos
 * Namespace é uma organização lógica, não é necessariamente relacionado com as pastas
 */

echo 'Namespace atual: '.__NAMESPACE__.'<br>';

const CONSTANTE = 234;

echo '\App\Principal\CONSTANTE = '. \App\Principal\CONSTANTE. '<br>';
echo constant(__NAMESPACE__ . '\CONSTANTE'). '<br>';

echo '<hr>';

namespace App\Principal\Especifico;

echo 'Namespace atual: '.__NAMESPACE__.'<br>';

const CONSTANTE = 345;

echo '\App\Principal\Especifico\CONSTANTE = '. \App\Principal\Especifico\CONSTANTE. '<br>';
echo 'constant( \\ . __NAMESPACE__ . \CONSTANTE) = ' . constant('\\' . __NAMESPACE__ . '\CONSTANTE'). '<br>';

/**
 * Posso ter mais de um namespace no mesmo arquivo, 
 * mas o mais comum e boa prática é organizar os namespaces em pastas, 
 * para ter uma organização melhor do seu código
 */