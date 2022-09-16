<div class="titulo">Traits #1</div>

<?php
print('<b>Exemplo 1</b><br>');

trait validacao 
{
    /**
     * Forma de reuso de código, a partir de composição
     * É diferente de herança
     */

     public $a = 'Valor A';

     public function validarString($str): bool
     {
        return isset($str) && $str !== '';
     }
}

trait validacaoMelhor
{
    public $b = 'Valor B';

    private $c = 'Valor C Privado';
    /**
     * Possibilidade de colocar atributos e métodos privados
     * Seguem as mesmas regras de utilização de herança e instâncias
     */

    public function validarStringMelhor($str): bool
    {
        return isset($str) && trim($str);
        /**
         * function trim retira os espaços em branco da string
         * neste caso se passar uma string com espaço em branco, vai retornar falso
         */
    }
}

class Usuario_1
{
    use validacao, validacaoMelhor;

    /**
     * No momento que colocamos o use para as traits, dentro da classe
     * o php incorpora as funções presentes nela na própria classe
     * Sem a necessidade de passar por herança (extends) ou como innterface (implements)
     */

     /**
      * Se eu tiver um atributo qiue será usado com frequência, 
      * podemos criar traits para armazenar os métodos, relaciondos a este atributo
      * ALTERNATIVA
      */

    public function imprimirValorC()
    {
        echo $this->c;
    }

}

echo '
<pre>
<strong>trait</strong> validacao => palavra trait é reservada !!
{
    /**
     * Forma de reuso de código, a partir de composição
     * É diferente de herança
     */

     public $a = "Valor A";

     public function validarString($str): bool
     {
        return isset($str) && $str !== "";
     }
}

trait validacaoMelhor
{
    public $b = "Valor B";

    private $c = "Valor C Privado";
    /**
     * Possibilidade de colocar atributos e métodos privados
     * Seguem as mesmas regras de utilização de herança e instâncias
     */

    public function validarStringMelhor($str): bool
    {
        return isset($str) && trim($str);
        /**
         * function trim retira os espaços em branco da string
         * neste caso se passar uma string com espaço em branco, vai retornar falso
         */
    }
}

class Usuario_1
{
    use validacao, validacaoMelhor;

    /**
     * No momento que colocamos o use para as traits, dentro da classe
     * o php incorpora as funções presentes nela na própria classe
     * Sem a necessidade de passar por herança (extends) ou como innterface (implements)
     */

     /**
      * Se eu tiver um atributo qiue será usado com frequência, 
      * podemos criar traits para armazenar os métodos, relaciondos a este atributo
      * ALTERNATIVA
      */

    public function imprimirValorC()
    {
        echo $this->c;
    }

}
</pre>';

//var_dump(validacao->validarString(''));

$usuario = new Usuario_1;
echo '$usuario = new Usuario_1';
echo '<br>';
echo '$resposta = $usuario->validarString(" "): ';
$resposta = $usuario->validarString(' ');
var_dump($resposta);
echo $resposta;

echo '<br>';
echo '$usuario->validarStringMelhor(" "): ';
var_dump($usuario->validarStringMelhor(' '));
echo $usuario->validarStringMelhor(' ');
echo '<br>';
echo '$usuario->a: ';
echo $usuario->a;
echo '<br>';
echo '$usuario->b: ';
echo $usuario->b;
echo '<br>';
echo '$usuario->imprimirValorC(): ';
$usuario->imprimirValorC();
// echo '<br>';
// echo $usuario->c;