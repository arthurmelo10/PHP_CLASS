<?php
    class Login_1
    {
        public static $user;

        public $admin;

        public static function verificaLogin()
        {
            echo "o ".self::$user." está logado";
        }

        public function sairSistema()
        {
        echo "<hr>o ".self::$user. " deslogou o ". $this->admin;
        }
    }

    Login_1::$user = "Arthur";
    Login_1::verificaLogin();
    
    $login = new Login_1();
    $login->admin = "Antonio";

    $login->sairSistema();
