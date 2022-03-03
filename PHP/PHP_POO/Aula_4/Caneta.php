<?php
class Caneta {
    //Atributos
    public string $modelo;
    public string $cor;
    private float $ponta;
    private bool $tampada;
    
    //Métodos especiais
    public function __construct($m, $c, $p){ //método construtor
        //$this -> cor = "Azul"; // não preciso ter declarado o atributo fora do construtor
        $this -> setModelo($m);
        $this -> setCor($c);
        $this -> setPonta($p);
        $this -> setTampada(false);
    }
    
    public function tampar(){
        $this-> tampada = true;
    }
    
    public function getTampada(){
        return $this ->  tampada;
    }
    
    public function setTampada(){
        $this -> tampada = false;
    }
    
    public function getModelo(){ // chamar a variável em um print na tela
        return $this -> modelo;
    }
    public function setModelo($m){
        $this -> modelo = $m;
    }
    
    public function getCor(){
        return $this -> cor;
    }
    
    public function setCor($c){
        $this -> cor = $c;
    }

    public function getPonta(){
            return $this -> ponta;
    }

    public function setPonta($p){
        $this -> ponta = $p;
    }
}