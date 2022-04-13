<?php
    class Newsletter
    {
        public function cadastrarEmail($email)
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               throw new Exception("Este e-mail é inválido",121);
            }

            echo "Email cadastrado com sucesso";
              
        }
    }

    $newsletter = new Newsletter();

    try {
        $newsletter->cadastrarEmail("contato@");
    }
    catch (Exception $e) {
        //capturar todas as exceções que podem ser geradas neste métodos;
        //$e é um objewto que contém informações da exceção da classe exception chamada anterioremente, no método cadastrarEmail();
        echo "Mensagem: ".$e->getMessage();
        echo "<hr> Code: ".$e->getCode();
        echo "<hr> Arquivo: ".$e->getFile();
        echo "<hr> Linha: ".$e->getLine(); 
    }    