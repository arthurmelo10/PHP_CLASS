<?php
    class Caneta
    {
        public string $modelo;
        public string $cor;
        private float $ponta;
        protected int $carga;
        protected bool $tampada;
        
        
        public function rabiscar(){
            echo "Estou rabiscando...";
        }
        
        public function tampar(){
            
        }
        
        public function destampar(){
            
        }
        
    }

    $c1 = new Caneta;
    /*$c1 -> modelo = "BIC CRISTAL";
    $c1 -> cor = "Azul";
    $c1 -> ponta = 0.5;
    $c1 -> tampada = true;
    $c1 ->rabiscar(); */
    $c1 -> modelo = "BIC cristal";
    $c1 -> cor = "Azul";
    // $c1 -> ponta = 0.5; // só pode mexer dentro da classe
    // $c1 -> carga = 99; // só pode acessar dentro da classe
    // $c1 -> tampada = true; não podea cessar o atributo protegido
    //var_dump($c1);
    $c1 -> rabiscar();
    $c1 -> destampar();// dentro do 
    // nem tudo que é privado ou protegido vocÇe não pode acessar;
    print_r($c1);
?>    