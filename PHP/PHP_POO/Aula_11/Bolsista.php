<?php
    require_once 'Aluno.php';
    //speciailização de aluno
    class Bolsista extends Aluno {
        //atributos
        private float $bolsa;

        //métodos especiais
        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bolsa){
            $this->bolsa=$bolsa;
        }

        //métodos públicos
        public function renovarBolsa(){
            echo "<p>Bolsa Renovada !!". $this->getNome()."</p>";
        }

        public function pagarMensalidade(){
            echo "<p>".$this->nome." é bolsista!! Então paga com desconto</p>";
        }
    }
?>