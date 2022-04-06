<?php
    
    class Veiculo 
    {
        public $modelo;
        public $cor;
        public $ano;

        protected function andar()
        {
            echo "Andou";
        }

        public function parar()
        {
            echo "Parou";
        }

        public function setModelo($m)
        {
            $this->modelo = $m;
        }

        public function getModelo()
        {
            return $this->modelo;
        }
    }
    
    
    class Carro extends Veiculo 
    {   
        public function ligarLimpador()
        {
            echo "limpando em 321";
        }

        public function mostrarAcao()
        {
            $this->andar();
        }
    }

    class Moto extends Veiculo 
    {
        // herda tudo da classe veículo
        public function darGrau()
        {
            echo "dando grtau em 321";
        }
    }    

    $veiculo = new Veiculo;
    $veiculo->setModelo("FERRARI");
    echo $veiculo->getModelo();
    var_dump($veiculo);

    $carro = new Carro;
    $carro->modelo = "Gol";
    $carro->ano = 2018;
    $carro->cor = "Vermelho";
    $carro->mostrarAcao();
    echo '<br>';
    $carro->ligarLimpador();
    echo '<br>';
    var_dump($carro);

    // echo '<br>';

    // $moto = new Moto;
    // $moto->cor = "Vermelho";
    // $moto->modelo = "Bis";
    // $moto->ano = 2019;
    // $moto->parar();
    // echo '<br>';
    // $moto->darGrau();
    // echo '<br>';
    // var_dump($moto);