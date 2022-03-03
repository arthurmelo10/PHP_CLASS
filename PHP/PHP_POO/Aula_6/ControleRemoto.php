<?php
    require_once 'Controlador.php';

    class ControleRemoto implements Controlador {
            //Atributos
        private int $volume;
        private bool $ligado;
        private bool $tocando;
        
        // Métodos Especiais
        public function __construct(){
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }
        
        private function getVolume(){
            return $this->volume;
        }
        
        private function setVolume(int $v){
            $this->volume = $v;
        }
        
        private function getLigado(){
            return $this->ligado;
        }
        
        private function setLigado(bool $l){
            $this->ligado = $l;
        }
        
        private function getTocando(){
            return $this->tocando;
        }
        
        private function setTocando($t){
            $this->tocando = $t;
        }
        
        // Métodos abstratos
        // controle remoto implementa controlador
        // Automaticamente sou obrigado a sobrescrever os métodos abstratos definidos anteriomente, sou obrigado a colocar todos os métodos abstratos dentro da classe
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<br/>Está ligado?: ". ($this->getLigado() ? "SIM":"NÃO");
            echo "<br/>Está tocando?: ". ($this->getTocando() ? "SIM":"NÃO");
            echo "<br/>Volume: ". $this->getVolume();
            for($i = 0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
        }
        public function fecharMenu(){
            echo "<br/>Fechando Menu ...";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this-> setVolume($this->getVolume() + 10);
            }
            if($this->getLigado() == false){
                echo "<br/>Erro, não é possível aumentar o volume da TV";
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 10);
            }
            if($this->getVolume() == false){
                echo "<br/>Erro, não é possível diminuir o volume";
            }
        }
        public function ligarMudo(){
            if($this->getVolume > 0 && $this->getLigado()) {
                $this-> setVolume(0);
            }
            if($this->getLigado() == false || $this->getVolume() == 0){
                echo "<br/>Não é possível mutar";
            }
        }
        public function desligarMudo(){
            if($this->getVolume == 0 && $this->getLigado()){
                $this->setVolume(50);
            } 
            if($this->getVolume > 0 || $this->getLigado() == false){
                echo"<br/>Não é possível desmutar";
            }
        }
        public function play(){
            if($this->getLigado() && $this->getTocando() == false){
                $this->setTocando(true);
            }
            if($this->getLigado() == false || $this->getTocando()){
                echo"<br/>Não é possivel apertar o play";
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
            if($this->getLigado() == false || $this->getTocando() == false){
                echo"<br/>Não é possível pausar";
            }
        }
    }
?>