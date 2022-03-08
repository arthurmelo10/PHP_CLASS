<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa {
        //atributos
        private string $materia;
        private float $salario;

        //métodos especiais
        public function __construct(string $materia, float $salario){
            $this->setMateria($materia);
            $this->setSalario($salario);
        }
        public function getMateria(){
            return $this->materia;
        }
        public function setMateria(string $materia){
            $this->materia=$materia;
        }
        public function getSalario(){
            return $this->salario;
        }    
        public function setSalario(float $salario){
            $this->salario=$salario;
        }
        //métodos da classe
        public function receberAum(float $acrescimo){
            $this->setSalario($this->getSalario() + $acrescimo);
        }
    }
?>