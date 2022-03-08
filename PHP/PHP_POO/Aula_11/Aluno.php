<?php
    require_once 'Pessoa.php';
    // herança para diferença
    class Aluno extends Pessoa{
        // atributos
        protected string $curso;
        protected bool $matricula;
        protected int $numMatri;

        //métodos especiais
        public function __construct(string $curso){
            $this->setCurso($curso);
            $this->setMatricula(true);
        }
        public function getCurso(){
            return $this->curso;
        }
        public function setCurso(string $curso){
            $this->curso=$curso;
        }
        public function getMatricula(){
            return $this->matricula;
        }
        public function setMatricula(bool $matricula){
            $this->matricula=$matricula;
        }
        public function getNumMatri(){
            return $this->numMatri;
        }
        public function setNumMatri(int $numMatri){
            $this->numMatri = $numMatri;
        }
        //métodos da classe
        public function cancelarMatri(){
            $this->setMatricula(false);
            echo "<p>Matricula será cancelada !!</p>";
        }

        public function pagarMensalidade(){
            echo "<p>Pagando a mensalidade do aluno ".$this->getNome()."</p>";
        }
    }
?>