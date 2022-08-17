<div class="titulo">Classe x Objeto</div>

<p>Classe</p>

<div>
    <b>Anatomia de uma classe</b>

    <pre>
        class Nome {

        // corpo

        }
    </pre>

    Toda classe tem um bloco de código associado
    <br>

    O corpo pode ter:  
    <ul>
        <li>
            atributos, características, propriedades -  
            <strong> DADOS !!! <=> Estrutura de Dados</strong> 
        </li>
        <li>
            comportamentos, ação, verbo - 
            <strong> MÉTODOS(FUNÇÕES) !!! <=> Algoritmos</strong> 
        </li>
    </ul>    

    <br>
        Classe é a estrutura que vai definir os objetos personalizados dentro de uma linguagem de programação, como no php, a classe vai definir os tipos que não temos por padrão.<br>
        Uma classe vai ajudar a criar tipos personalizados - SISTEMA DE UNIVERSIDADE EXEMPLO !!!<br>
        Podemos ter uma classe referenciada para outra classe
    </br>

    <p>
        Classe é uma estrutura que agrupa atributos e comportamentos, da mesma forma que objetos do mundo real apresentam atributos e comportamentos - Tentativa de Modelagem da vida real
    </p>

    <p>
        Alguns Fatos
    </p>
    <ul>
        <li>
            Classe define um tipo de Estrutura de Dados, de acordo com a necessiade da aplicação a ser desenvolvida
        </li>
        <li>
            Classe representa uma abstração - Simplificação
        </li>
            Sempre que mapeamos um conceito da vida real e jogamos dentro de uma aplicação, este conceito será simplificado, para atender a demanda da aplicação, sistema a ser desenvolvido.
            OO tem a inspiração no mundo real = olhar o mundo real, entender a situação problema, quais são as interações e os objetos da mesma e criar/aplicar uma aplicação web para soluciuonar.
        <li>
            Classe pode definir mais de um objeto
        </li>
    </ul>
    Dados criados a partir de uma classe são chamados de <strong>OBJETOS</strong> que também são conhecidos como <strong>INSTÂNCIAS</strong>. 
    A estrutura de dados e os comportamentos, <strong> serão os mesmos </strong> para todas as instâncias, apesar de as informações estarem diferentes.
    <div>
        <p>Diferença entre classe e objeto</p>

        Classe é umn molde, que define as características e os comportamentos de objetos ou instâncias<br>
        Uma classe pode criar inúmeros objetos<br>
        
        <strong>Exemplo - aplicação para ecommerce</strong>
        <br>class Cliente
        <ul>
            <li>objeto Arthur</li>
            <li>objeto João</li>
            <li>objeto Maria</li>
        </ul>

        <br>class Product<br>
        <ul>
            <li>objeto Cimento</li>
            <li>objeto Lâmpada</li>
            <li>objeto Areia</li> 
        </ul>

        <br>class Produto<br>
        <ul>
            <li>atributo nome</li>
            <li>atributo preço</li>
            <li>atributo desconto</li> 
        </ul>

        construtor é um método especial, que é focado em criar objetos a partir de uma classe
        construtor cria umanova instância da classe, ao ser chamado

        Os novos objetos possuem os mesmos atributos da classe 
        <br>Objeto Produto_1 <br>
        <ul>
            <li>atributo nome = Notebook</li>
            <li>atributo preço = R$4200,00</li>
            <li>atributo desconto = 15%</li>
        </ul>

        <br>Objeto Produto_2 <br>
        <ul>
            <li>atributo nome = Celular</li>
            <li>atributo preço = R$1800,00</li>
            <li>atributo desconto = 35%</li>
        </ul>

        <p>A classe é o molde, a estrtura de dados e  o objeto é aquilo que é gerado pelo molde, é o dado !!</p>


    </div>
</div>

<?php

class Produto 
{
    public string $nome;
    public float $preco;
    public float $desconto;

}