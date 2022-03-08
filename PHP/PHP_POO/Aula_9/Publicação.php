<?php

    interface Publicação{
        public function abrir();
        public function fechar();
        public function folhear(int $p);
        public function avançarPag();
        public function voltarPag(); 
    }
?>