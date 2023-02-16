<?php

// require_once(dirname(__FILE__, 2) . '/src/Config/databaseInterface.php');


class Database
{
    
    public static function getConnection(): mysqli 
    {
        $envPath = realpath(dirname(__FILE__) . '/../.env');
        $env = parse_ini_file($envPath);

        $conexao = new mysqli($env['HOST'], $env['USERNAME'], $env['PASSWORD'], $env['DATABASE']);

        if ($conexao->connect_error) {
            die("Erro: " . $conexao->connect_error);
        }

        return $conexao;
    }

    public static function createTableForDatabase(): void
    {
        $sql = self::createTables();
        
        $conexao = self::getConnection();

        foreach ($sql as $script) {
            $result = $conexao->query($script);
        }
        
    }

    public static function createDataForUsersDatabase()
    {
       
        $sql = self::createUsers(); 

        $conexao = self::getConnection();

        foreach ($sql as $script) {
            $result = $conexao->query($script);
        }
    }

    public static function getResultFronQuery($sql)
    {
        $conexao = self::getConnection();
        $result = $conexao->query($sql);

        $conexao->close();

        return $result;
    }

    private function createTables()
    {
        $sqls = [
            'CREATE TABLE IF NOT EXISTS users(
                id INT(6) AUTO_INCREMENT PRIMARY KEY, 
                name VARCHAR(100) NOT NULL,
                password VARCHAR(100) NOT NULL,
                email VARCHAR(50) UNIQUE NOT NULL,
                start_date DATE NOT NULL,
                end_date DATE,
                is_admin BOOLEAN NOT NULL DEFAULT false
            )',
            'CREATE TABLE IF NOT EXISTS working_hours (
                id INT(6) AUTO_INCREMENT PRIMARY KEY, 
                user_id INT(6),
                work_date DATE NOT NULL,
                time1 TIME,
                time2 TIME,
                time3 TIME,
                time4 TIME,
                worked_time INT,
            
                FOREIGN KEY (user_id) REFERENCES users(id),
                CONSTRAINT cons_user_day UNIQUE (user_id, work_date)
            )'
        ];

        return $sqls;
    }

    private function createUsers()
    {
        $sqls = [
            "INSERT INTO users IF NOT EXISTS (id, name, password, email, start_date, end_date, is_admin)
        VALUES (1, 'Admin', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'admin@cod3r.com.br', '2000-1-1', null, 1)",
            "INSERT INTO users IF NOT EXISTS (id, name, password, email, start_date, end_date, is_admin)
        VALUES (2, 'Chaves', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'chaves@cod3r.com.br', '2000-1-1', null, 1)",
            "INSERT INTO users IF NOT EXISTS (id, name, password, email, start_date, end_date, is_admin)
        VALUES (3, 'Seu Barriga', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'barriga@cod3r.com.br', '2000-1-1', null, 0)",
            "INSERT INTO users IF NOT EXISTS (id, name, password, email, start_date, end_date, is_admin)
        VALUES (4, 'Seu Madruga', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'madruga@cod3r.com.br', '2000-1-1', null, 0)",
            "INSERT INTO users IF NOT EXISTS (id, name, password, email, start_date, end_date, is_admin)
        VALUES (5, 'Quico', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'quico@cod3r.com.br', '2000-1-1', '2019-1-1', 0)",
        ];

        return $sqls;
    }


}