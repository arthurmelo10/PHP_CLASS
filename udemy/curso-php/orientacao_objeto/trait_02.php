<div class="titulo">Trait #2</div>


<?php
print('<b>Exemplo 2</b><br>');

trait validacao 
{
    public function validarString($str)
    {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor
{
    public function validarString($str)
    {
        return isset($str) && trim($str);
    }

    /**
     * Métodos conflitantes, pois possuem o mesmo nome
     */
}

class Usuario_2
{
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;
        //validacao::validarString insteadOf validacaoMelhor;

        validacao::validarString as validacaoSimples;
    }
    /**
     * Aqui, estamos escolhendo utilizar o método da classe validacaoMelhor
     * E renomeando o método validarString, da trait validacao, 
     * assim será possível ser utilizado
     */

     /**
      * Somente alterar o nome do método, com alias, não retira o conflito
      */
}

echo '
<pre>
trait validacao 
{
    public function <strong>validarString($str)</strong>
    {
        return isset($str) && $str !== "";
    }
}

trait validacaoMelhor
{
    public function <strong>validarString($str)</strong>
    {
        return isset($str) && trim($str);
    }

    /**
     * <b>Métodos conflitantes, pois possuem o mesmo nome</b>
     */
}

class Usuario_2
{
    use validacao, validacaoMelhor {
        //validacaoMelhor::validarString insteadOf validacao;
        //validacao::validarString insteadOf validacaoMelhor;

        validacao::validarString as validacaoSimples;
    }
    /**
     * Aqui, estamos escolhendo utilizar o método da classe validacaoMelhor
     * E renomeando o método validarString, da trait validacao, 
     * assim será possível ser utilizado
     */

     /**
      * Somente alterar o nome do método, com alias, não retira o conflito
      */
}
</pre>
';

$usuario = new Usuario_2;
echo '$usuario = new Usuario_2<br>';
echo 'var_dump($usuario->validarString(" ")): ';
var_dump($usuario->validarString(' '));
echo '<br>';
echo 'var_dump($usuario->validacaoSimples(" ")): ';
var_dump($usuario->validacaoSimples(' '));
