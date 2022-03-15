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
        }
        

    }
    