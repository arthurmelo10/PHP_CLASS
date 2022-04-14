<?php
     /*class Produto 
     {
         public $name;
         public $valor;
 
         public function __construct( $name, $valor) 
         {
             $this->name = $name;
             $this->valor = $valor;
         }
     }
 
     class Carrinho 
     {
         public $produtos;
 
         public function adiciona(Produto $produto) 
         {
             $this->produtos[] = $produto;
         }
 
         public function exibe()
         {
             foreach($this->produtos as $produto)
             {
                 echo $produto->name.'<br>';
                 echo $produto->valor.'<hr>';
 
             }
         }
     }
     // ionstanciação de Produto fora da classe Carrinho
     $produto = new Produto('notebook', '15000');
     $produto_1 = new Produto('mouse', '510');
 
     $carrinho = new Carrinho;
     $carrinho->adiciona($produto);
     $carrinho->adiciona($produto_1);
     $carrinho->exibe();*/

     class Pessoa 
     {
         public function atribuiNome($nome)
         {
            return "O nome da pessoa é ".$nome;
         }
     }

     class Exibe
     {
         public $pessoa;
         public $nome;

        public function __construct($nome)
        {
            $this->pessoa =  new Pessoa; // instanciação dentro da própria classe
            $this->nome = $nome;
        }

        public function exibeNome()
        {
            echo $this->pessoa->atribuiNome($this->nome);
        }
     }

     $exibe = new Exibe('Arthur');
     $exibe->exibeNome();