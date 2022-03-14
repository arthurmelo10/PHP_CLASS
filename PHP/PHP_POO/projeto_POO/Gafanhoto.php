<?php
    require_once 'Pessoa.php';

    class Gafanhoto extends Pessoa {
        
        //atributos
        private bool $login;
        private int $totAssistido;

        //métodos públicos
        public function ganharExp(){
            $this->setExperiencia($this->getExpeirencia() + 1);
        }

        public function viuMaisUm(){
            $this->setTotAssitido($this->getTotAssistido() + 1);
        }
        
        //métodos especiais
        public function __construct(string $name, int $idade, string $sexo){
            $this->name = $name;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia=0;
            $this->login=false;
            $this->totAssistido=0;
        }

        public function getLogin(){
            return $this->login;
        }
        public function setLogin(bool $login){
            $this->login = $login;
        }
        public function getTotAssistido(){
            return $this->totAssintido;
        }
        public function setTotAssitido(int $totAssistido){
            $this->totAssistido = $totAssistido;
        }
    }