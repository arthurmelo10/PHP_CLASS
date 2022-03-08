<?php   
    abstract class Pessoa {
        //atributos
        protected string $nome;
        protected string $sexo;
        protected int $idade;

        //métodos especiais
        public function __construct(string $nome, string $sexo, int $idade){
            $this->setNome($nome);
            $this->setSexo($sexo);
            $this->setIdade($idade);
    }
        public function getNome(){
            return $this->nome;
        }
        public function setNome(string $nome){
            $this->nome = $nome;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo(string $sexo){
            $this->sexo= $sexo;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade(int $idade){
            $this->idade=$idade;
        }
        //métodos da classe
        public final function fazerAniv(){
            $this->setIdade($this->getIdade() +1);
        }
    }
?>