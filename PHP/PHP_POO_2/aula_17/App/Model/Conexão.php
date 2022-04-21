<?php
    
    namespace App\Model;
    
    class Conexão
    {
        //padrão singleton - ter apenas uma instância da conexão para deixar ela mais rápida

        private static $instance;

        public static function getConn() // verificarr se já existe uma conexao com o banco de dados
        {
            if(!isset(self::$instance)) {
                self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','');
            }

            return self::$instance;
        }

    }