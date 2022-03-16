<?php
    require_once 'Gafanhoto.php';
    require_once 'Video.php';

    class Visualização {
        //atributo
        private $viewer;
        private $video;

        //métodos especiais
        public function __construct(Gafanhoto $pessoa, Video $video){
            $this->viewer = $pessoa;
            $this->video = $video;
            
        }

        public function getViewer(){
            return $this->viewer;
        }
        public function setViewer($pessoa){
            $this->viewer = $viewer;
        }
        public function getVideo(){
            return $this->video;
        }
        public function setVideo($video){
            $this->video = $video;
        }

        //métodos públicos

        public function assistirVideo(Gafanhoto $pessoa, Video $video){
            if($pessoa->getLogin()==false){
                echo "<p>Usuário não logado</p>";
            }
            if($pessoa->getLogin()==true){
                echo "<p>Pode Assistir !!</p>";
                $video->play();
                $pessoa->ganharExp();
                $pessoa->viuMaisUm();
                $video->getViews();
                $video->setViews();

            }
        }

        public function avaliar(string $resposta){
           
            if($resposta == "Sim"){
                $this->video->like();
                $this->video->setAvaliação(10);
            }
            if($resposta == "Não"){
                $this->video->pause();
                $this->video->setAvaliação(-5);
            }
            if($resposta <> "Sim" && $resposta <> "Não"){
                echo "Avaliação Incorreta !!";
            }
        }

        public function avaliarNota($nota) {
            $this->video->setAvaliação($nota);
            //echo "<br/>".$nota;
        }

        public function avaliarPorc(float $porc) {
            $nova = 0;
            if($porc<=20){
                $nova = 3;
            }
            if($porc>20 && $porc<=50){
                $nova = 5;
            }
            if($porc>50 && $porc<=80){
                $nova = 8;
            }
            if($porc>80 && $porc<=100){
                $nova = 10;
            }

            $this->video->setAvaliação($nova);
        }



        

    }
    