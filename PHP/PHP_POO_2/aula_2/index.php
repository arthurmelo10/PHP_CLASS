<?php
    class Login
    {
        /**
         * @var string
         */
        private $email;

        /**
         * @var string
         */
        private $senha;

        /**
         * @var string
         */
        private $nome;

        public function __construct($email, $senha, $nome)
        {
            $this->setEmail($email);
            $this->setSenha($senha);
            $this->nome = $nome;
        }

        public function getEmail(): string
        {
            return $this->email;
        }

        public function setEmail(string $email)
        {   
            $filterEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
            $this->email = $filterEmail;
        }

        public function getSenha(): string 
        {
            return $this->senha;
        }

        public function setSenha(string $senha)
        {
            $this->senha = $senha;
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function logar()
        {
            if($this->email == "teste@teste.com" and $this->senha == "12345") {
               echo "Logado com Sucesso";  
            } 
            if($this->email <> "teste@teste.com" or $this->senha <> "12345") {
                echo "Dados Inválidos";  
            }
        }
    }

    $logar = new Login("teste@teste.com", "13345", "Arthur Bezera de Melo");
    
    $logar->logar();

    echo $logar->getEmail();
    echo $logar->getSenha();
    echo $logar->getNome();