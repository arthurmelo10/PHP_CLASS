<?php
    require_once 'Pessoa.php';
    require_once 'Publicação.php';

    class Livro implements Publicação {
        //atributos
        private string $titulo;
        private string $autor;
        private int $totPaginas;
        private int $pagAtual;
        private bool $aberto;
        private $leitor;

        //métodos especiais

        public function __construct(string $titulo, string $autor, int $totPaginas, Pessoa $leitor){
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setPagAtual(0);
            $this->setAberto(false);
            $this->setLeitor($leitor);
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo(string $titulo){
            $this->titulo = $titulo;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function setAutor(string $autor){
            $this->autor = $autor;
        }
        public function getTotPaginas(){
            return $this->totPaginas;
        }
        public function setTotPaginas(int $totPaginas){
            $this->totPaginas = $totPaginas;
        }
        public function getPagAtual(){
            return $this->pagAtual;
        }
        public function setPagAtual(int $pagAtual){
            $this->pagAtual = $pagAtual;
        }
        public function getAberto(){
            return $this->aberto;
        }
        public function setAberto(bool $aberto){
            $this->aberto = $aberto;
        }
        public function getLeitor(){
            return $this->leitor;
        }
        public function setLeitor($leitor){
            $this->leitor = $leitor;
        }


        //métodos interface

        public function abrir(){
            $this->setAberto(true);
        }
        public function fechar(){
            $this->setAberto(false);
        }
        public function folhear(int $p){
            if($this->getAberto()){
                if($p > $this->totPaginas){
                    $this->setpagAtual(0);
                }
                if($p <= $this->totPaginas){
                    $this->setpagAtual($p);
                }
            }
            if($this->getAberto() == false){
                echo "Abra o livro !!";
            }    
        }
        public function avançarPag(){
           $this->setPagAtual($this->getPagAtual()+1);                 
        }
        public function voltarPag(){
            $this->setPAgAtual($this->getPagAtual()-1);
        }

        //metodo padrão classe
        public function detalhes(){
            echo "<br/> Livro ".$this->titulo." escrito por ".$this->autor;
            echo "<br/> Paginas: ".$this->totPaginas;
            echo "<br/> Lido por: ".$this->leitor->getPessoa();
            echo "<br/> O livro está ".$this->getAberto();
            echo "<br/> Página Atual ".$this->pagAtual;
        }
    }

