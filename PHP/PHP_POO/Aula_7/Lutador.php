<?php
    class Lutador {
         //Atributos
        private string $nome;
        private string $nacionalidade;
        private int $idade;
        private float $altura;
        private float $peso;
        private string $categoria;
        private int $vitorias;
        private int $derrotas;
        private int $empates;
            
         //métodos 
        public function apresentar(){
            echo "Nome: ".$this->getNome()."<br/>";
            echo "Nacionalidade: ".$this->getNacionalidade()."<br/>";
            echo "Idade: ".$this->getIdade()."<br/>";
            echo "Altura: ".$this->getAltura()."<br/>";
            echo "Pesa: ".$this->getPeso()."<br/>";
            echo "Ganho: ".$this->getVitorias()."<br/>";
            echo "Perdeu: ".$this->getDerrotas()."<br/>";
            echo "Empatou: ". $this->getEmpates()."<br/>";
        }
        public function status(){
            echo "<br/>".$this->getNome()."<br/>";
            echo "Peso ". $this->getCategoria()."<br/>";
            echo $this->getVitorias(). " vitóritas <br/>";
            echo $this->getDerrotas(). " derrotas<br/>";
            echo $this->getEmpates(). " empates<br/>";
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias()+1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas()+1);
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates()+1);
        }
        // métodos especiais
        public function __construct(string $no, string $na, int $id, float $al, float $pe, int $vi, int $de, int $em){
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome(string $nome){
            $this->nome = $nome;
        }
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        public function setNacionalidade(string $nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade(int $idade){
            $this->idade=$idade;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function setAltura(float $altura){
            $this->altura= $altura;                     
        }
        public function getPeso(){
            return $this->peso;
        }
        public function setPeso(float $peso){
            $this->peso=$peso;
            $this->setCategoria();
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function setCategoria(){
            //$this->categoria=$categoria;
            if($this->getPeso() < 52.2) {
                $this-> categoria="Inválido";
            }
            if($this->getPeso()>=52.2 && $this->getPeso()<=70.3){
                $this->categoria="Leve";
            }
            if($this->getPeso()>70.3 && $this->getPeso()<=83.9 ){
                $this->categoria="Médio";
            }
            if($this->getPeso()>83.9 && $this->getPeso() <= 120.2){
                $this->categoria="Pesado";
            }
            if($this->getPeso() > 120.2){
                $this->categoria="Inválido";
            }
        }
        public function getVitorias(){
            return $this->vitorias;
        }
        public function setVitorias(int $vitorias){
            $this->vitorias=$vitorias;
        }
        public function getDerrotas(){
            return $this->derrotas;
        }
        public function setDerrotas(int $derrotas){
            $this->derrotas=$derrotas;
        }
        public function getEmpates(){
            return $this->empates;
        }
        public function setEmpates(int $empates){
            $this->empates=$empates;
        }
    }

?>