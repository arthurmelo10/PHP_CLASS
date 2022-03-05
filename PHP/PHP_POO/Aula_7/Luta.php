<?php
    require_once 'Lutador.php';
    class Luta {
        //Atributos
        private $desafiado;
        private $desafiante;
        private int $rounds;
        private bool $aprovada;

        //métodos especiais
        private function getDesafiado(){
            return $this->desafiado;
        }
        private function setDesafiado($dd){
            $this->desafiado = $dd;
        }
        private function getDesafiante(){
            return $this->desafiante;
        }
        private function setDesafiante($df){
            $this->desafiante = $df;
        }
        private function getRounds(){
            return $this->rounds;
        }
        private function setRounds(int $rounds){
            $this->rounds = $rounds;
        }
        private function getAprovada(){
            return $this->aprovada;
        }
        private function setAprovada(bool $aprovada){
            $this->aprovada = $aprovada;
        }
        


        //métodos públicos
        public function marcarLuta(Lutador $l1, Lutador $l2){
            if($l1->getCategoria() === $l2->getCategoria() && ($l1!=$l2)){
            //if($l1!=$l2){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }
            if($l1->getCategoria() != $l2->getCategoria() || ($l1===$l2)){
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
        public function lutar(){
            if($this->getAprovada()){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor=rand(0...2);
                switch ($vencedor) {
                    case 0://empate da luta
                        echo "Empatou";
                        $this->desafiado->empatarLuta();
                        $this->$desafiante->empatarLuta();
                        break;
                    case 1: // vitória desafiado
                        echo $desafiado->getNome()." venceu";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:// vitória desafiante
                        echo $desafiante->getNome." venceu";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }
            }
            if($this->getAprovada()==false){
                echo "Luta não aprovada !!";
            }
        }
    }