<?php
    require_once 'AcoesVideo.php';

    class Video implements AcoesVideo {
        //atributos
        private string $titulo;
        private int $views;
        private int $curtidas;
        private bool $reproduzindo;
        private float $avaliação;

        // métodos especiais

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        public function getViews(){
            return $this->views;
        }
        public function setViews($views){
            $this->views = $views;
        }
        public function getCurtidas(){
            return $this->curtidas;
        }
        public function setCurtidas($curtidas){
            $this->curtidas = $curtidas;
        }
        public function getReproduzindo(){
            return $this->reproduzindo;
        }
        public function setReproduzindo($reproduzindo){
            $this->reproduzindo = $reproduzindo;
        }
        public function getAvaliação(){
            return $this->avalização;
        }
        public function setAvaliação($avaliação){
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