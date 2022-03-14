<?php
    abstract class Pessoa {
        //atributos
        protected string $name;
        protected int $idade;
        protected string $sexo;
        protected int $experiencia;
        
        //métodos especiais
        abstract public function ganharExp();
        
        //métods especiais
        public function __construct(string $name, int $idade, string $sexo){
            $this->name = $name;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public function getName(){
            return $this->name;
        }
        public function setName(string $name){
            $this->name = $name;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade(int $idade){
            $this->idade = $idade;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setsexo(string $sexo){
            $this->sexo = $sexo;
        }
        public function getExperiencia(){
            return $this->experiencia;
        }
        public function setExperiencia(int $experiencia){
            $this->experiencia = $experiencia;
        }
    }