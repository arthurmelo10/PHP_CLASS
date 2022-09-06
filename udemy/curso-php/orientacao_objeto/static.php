<div class="titulo">Membros de Classe - Static</div>

<div>
    <div>
        <ul>
            Classe A, com atributo nome;
            <li>Instância 1 de A, com seu próprio nome = Ana</li>
            <li>Instância 2 de A, com seu próprio nome = Carlos</li>
            <li>Instância 3 de A, com seu próprio nome = João</li>

            <strong>Atributo pertence a instância !!</strong>
        </ul>
    </div>
    <div>
        <ul>
            Classe A, com atributo nome estático = Arthur;
            <li>Instância 1 de A, recebe o atributo nome com valor Arthur</li>
            <li>Instância 2 de A, recebe o atributo nome com valor Arthur</li>
            <li>Instância 3 de A, recebe o atributo nome com valor Arthur</li>

            <strong>Atributo pertence a classe !!</strong>
        </ul>
        <p>
            Temos um único valor associado àquele atributo, que vai para todos os objetos.<br>
            Muito utilizado com constantes !!<br>
            
            <ul>
                Classe Math, com a constante estática PI = 3,14;
                <li>Instância 1 de A, recebe a constante PI</li>
                <li>Instância 2 de A, recebe a constante PI</li>
                <li>Instância 3 de A, recebe a constante PI</li>
            </ul>

            Todas as instâncias tem acesso ao atributo, método estático. Todas as instâncias vão acessar o mesmo valor, ou o mesmo comportamento.
        </p>
    </div>
</div>

<?php
print('<b>Definição</b><br>');

echo '<br>Membros exclusivos das classes (atributos, constantes e métodos), que levam a palavra reservada static em sua declaração<br>';

echo '<hr>';

print('<p>Exemplo 1</p>');

class A 
{
    public $naoStatic = 'Variável de instância';

    public static $static = 'Variável de classe'; 

    /**
     * Palavra reservada static define a propriedade $static como exclusiva da classe A, e não de seus objetos. Entretanto, ela pode ser acessada por seus objetos
     */

     public function mostrarA ()
     {
        echo "Não estática = {$this->naoStatic}<br>";
        //tentativa 1
        echo "Estática = {$this->static}<br>";
        //tentativa 2
        echo "Estática = ", A::$static;
     }
}

echo '
<pre>
class A 
{
    public $naoStatic = "Variável de instância";

    public static $static = "Variável de classe"; 

    /**
     * Palavra reservada static define a propriedade $static como exclusiva da classe A, e não de seus objetos. Entretanto, ela pode ser acessada por seus objetos
     */

     public function mostrarA ()
     {
        echo "Não estática = {$this->naoStatic}";
        //tentativa 1
        echo "Estática = {$this->static}";
        //tentativa 2
        echo "Estática = ", A::$static;
     }
}
</pre>';

$classe = new A();
echo '$classe = new A()';
echo '<br>';
echo '$classe->mostrarA()<br>';
$classe->mostrarA();