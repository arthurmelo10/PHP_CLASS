<?php
    require_once 'AcaoVideo.php';

    class Video implements AcaoVideo {
        //atributos
        private string $titulo;
        private int $views;
        private int $curtidas;
        private bool $reproduzindo;
        private float $avaliação;

        // métodos especiais
        
        public function __construct(string $titulo){
            $this->titulo=$titulo;
            $this->avaliação=1;
            $this->views=0;
            $this->curtidas=0;
            $this->reproduzindo=false;
        }


        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo(string $titulo){
            $this->titulo = $titulo;
        }
        public function getViews(){
            return $this->views;
        }
        public function setViews(int $views){
            $this->views = $views;
        }
        public function getCurtidas(){
            return $this->curtidas;
        }
        public function setCurtidas(int $curtidas){
            $this->curtidas = $curtidas;
        }
        public function getReproduzindo(){
            return $this->reproduzindo;
        }
        public function setReproduzindo(bool $reproduzindo){
            $this->reproduzindo = $reproduzindo;
        }
        public function getAvaliação(){
            return $this->avalização;
        }
        public function setAvaliação(int $avaliação){
            $this->avaliação = $avaliação;
        }

        // métodos da interface
        public function play(){
            $this->setReproduzindo(true);
        }
        public function pause(){
            $this->setReproduzindo(false);
        }
        public function like(){
            $this->setCurtidas($this->getCurtidas() + 1);
        }
    }
?>    