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
        $this->naoMostrar();
    }

    protected function vaiPorHeranca() 
    {
        echo "Serei transmitido por herança<br>";
        /**
         * Função protegida só consegue ser chamada de forma direta na classe que extende da classe pai
         */
    }
    
    private function naoMostrar() 
    {
        echo "Não vou imprimir<br>";
        /**
         * Função privada só consegue ser chamada de forma direta, a partir da própria classe
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
    private $privado = "Privado"; // acesso direto negado

    public function mostrarA ()
    {
        echo "Class A) Público = {$this->publico}";
        echo "Class A) Protegido = {$this->protegido}";
        echo "Class A) Privado = {$this->privado}";
        /**
         * Acesso liberado para instâncias e classes que extendem de A
         */
        $this->naoMostrar(); => neste caso, estamos acessando um método privado a partir de um método público !!
    }

    protected function vaiPorHeranca() 
    {
        echo "Serei transmitido por herança<br>";
        /**
         * Funnção protegida só consegue ser chamada de forma direta na classe que extende da classe pai
         */
    }
    
    private function naoMostrar() 
    {
        echo "Não vou imprimir";
        /**
         * Função privada só consegue ser chamada de forma direta, a partir da própria classe
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
echo '$a->naoMostrar() => gera um erro 500 -> Uncaught Error: Call to private method A::nãoMostrar()';
echo '<br>Não podemos acessaar atributos e métodos, privados, de forma direta, somente com base em um método público que internamente, .
acesse os atributos privados <br>';
echo '$a->protegido => gera erro 500, só podemos acessar o atribudo protegido via herança ou via uma função pública que acessa o conteúdo protegido';
echo '<p>Se o método privado não for chamado dentro da própria classe, não faz sentido nenhum ele existir !! </p>';

echo '<hr>';

print('<p><b>Exemplo com Herança</b></p>');
class B extends A
{
    public function mostrarB()
    {
        echo "Classe B) Público = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        /**
         * o ponto do atributo protegido é ser transmitido por herança 
         */ 
        echo "Classe B) Privado = {$this->privado}<br>";
        /**
         * Não está disponível via herança, por isso fica vazio
         */
    }

    public function veioPorHeranca()
    {
        parent::vaiPorHeranca();
    }
}

echo '
<pre>
class B extends A
{
    public function mostrarB()
    {
        echo "Classe B) Público = {$this->publico}";
        echo "Classe B) Protegido = {$this->protegido}";
        /**
         * o ponto do atributo protegido é ser transmitido por herança 
         */ 
        echo "Classe B) Privado = {$this->privado}";
        /**
         * Não está disponível via herança, por isso fica vazio
         */
    }

    public function veioPorHeranca()
    {
        parent::vaiPorHeranca();
    }
}
</pre>';

$b = new B();
echo '$b = new B()';
echo '<br>';
echo '$b->mostrarA(): <br>';
$b->mostrarA();
echo '<br>';
echo '$b->mostrarB(): <br>';
$b->mostrarB();
echo '$b->veioPorHeranca() => ';
$b->veioPorHeranca();
echo '<br>';
echo '<strong>$b->naoMostrar() => não é possível acessar o método privado da classe pai</strong><br>';
echo '<strong>$b->protegido => só será visível de forma direta dentro da classe que extende da classe pai, e não de forma direta para o objeto</strong><br>';



/**
 * Não pode ser chamada diretamente, quando instaciar um objeto do tipo B;
 * Esta função só pode ser acessada dentro da classe que recebeu por herança;
 * Somente se fosse pública, poderia ser acessada de forma direta;
 */


