<div class="titulo">Modificadores de Acesso</div>

<?php
print('<b>Visibilidade</b> => Encapsulamento<br>');

echo 'Podemos ter o encapsulamento a partir dos modificadores de acesso:
    <ul>
    <li>Public</li>
    <li>Private</li>
    <li>Protected</li>
    </ul>';

class A 
{
    public $publico = 'Publico'; // acesso liberado
    protected $protegido = 'Protegido'; // acesso permitido para as classes que extendem de A
    private $privado = 'Privado'; // acesso negado

    public function mostrarA ()
    {
        echo "Class A) Público = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
        /**
         * Acesso liberado para instâncias e classes que extendem de A
         */
    }

    private function nãoMostrar() 
    {
        echo "Não vou imprimir";
        /**
         * Funnção privada só consegue ser chamada de forma direta, a partir da própria classe
         * O objeto ou instância da classe A, não tem acesso direto a função nãoMostrar();
         */
    }
}

echo '
<pre>
class A 
{
    public $publico = "Publico"; // acesso liberado
    protected $protegido = "Protegido"; // acesso permitido para as classes que extendem de A
    private $privado = "Privado"; // acesso negado

    public function mostrarA ()
    {
        echo "Class A) Público = {$this->publico}";
        echo "Class A) Protegido = {$this->protegido}";
        echo "Class A) Privado = {$this->privado}";
        /**
         * Acesso liberado para instâncias e classes que extendem de A
         */
    }

    private function nãoMostrar() 
    {
        echo "Não vou imprimir";
        /**
         * Funnção privada só consegue ser chamada de forma direta, a partir da própria classe
         * O objeto ou instância da classe A, não tem acesso direto a função nãoMostrar();
         */
    }
}
</pre>';

$a = new A;
echo '$a = new A<br>';
echo '$a->mostrarA(): <br>';
$a->mostrarA();
//$a->nãoMostrar();
echo '$a->nãoMostrar() => gera um erro 500 -> Uncaught Error: Call to private method A::nãoMostrar()';

