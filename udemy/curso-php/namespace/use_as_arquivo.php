<?php

namespace Nome\Bem\Grande;

echo 'Namespace: '.__NAMESPACE__.'<br>';

const CONSTANTE = 123;

function soma($a, $b) 
{
    return $a + $b;
}

class Classe {
    public $var;

    public function func() 
    {
        echo  __NAMESPACE__ . '-> ' . __CLASS__ . '-> ' . __METHOD__; 
    }

}