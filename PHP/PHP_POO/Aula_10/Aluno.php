<?php
    require_once 'Pessoa.php';

    class Aluno extends Pessoa{
        // atributos
        private string $curso;
        private bool $matricula;

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
        //métodos da classe
        public function cancelarMatri(){
            $this->setMatricula(false);
            echo "<p>Matricula será cancelada !!</p>";
        }
    }
?>