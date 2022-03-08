<?php
    require_once 'Pessoa.php';
    class Funcionario extends Pessoa{ 
        //atributos
        private string $cargo;
        private bool $trabalhando;

        //métodos especiais
        public function __construct(string $cargo){
            $this->setCargo($cargo);
            $this->setTrabalhando(true);
        }

        public function getCargo(){
            return $this->carg0;
        }
        public function setCargo(string $cargo){
            $this->cargo=$cargo;
        }
        public function getTrabalhando(){
            return $this->trabalhando;
        }
        public function setTrabalhando(bool $trabalhando){
            $this->trabalhando=$trabalhando;
        }
        //métodos da classe
        public function mudarTrabalho(){
            $this->setTrabalhando(false);
        }
    }
?>