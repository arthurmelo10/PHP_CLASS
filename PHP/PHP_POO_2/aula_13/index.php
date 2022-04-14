<?php
    class Produto 
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

    $produto = new Produto('notebook', '15000');
    $produto_1 = new Produto('mouse', '510');

    $carrinho = new Carrinho;
    $carrinho->adiciona($produto);
    $carrinho->adiciona($produto_1);
    $carrinho->exibe();

/*relacionamento de agregação -> a classe carrinho precisa de uma instância da classe de produto para poder funcionar corretamenta;

método foreach utilizado para printar na tela os atributos(propriedades) da classe produto, que está sendo instanciada e utilizada dentro da classe Carrinho*/