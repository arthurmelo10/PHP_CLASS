<?php
    
    namespace App\Model;

    require 'App/Model/Conexão.php';
        
    class ProdutoDao
    {
        public function create(Produto $p) // incluir um produto no banco de dados
        {
            // criar o sql id é uma chave primária - auto incrementado
            $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?;?)'; 

            $stmt = Conexão::getConn()->prepare($sql); // preparar o sql utilizando o PDO 

            // associar o nome e descrição do produto aos campos do banco de dados
            $stmt->bindValue(1,$p->getNome());
            $stmt->bindValue (2,$p->getDescrição());
            
            $stmt->execute();

        }

        public function read() 
        {
            $sql = 'SELECT * FROM produtos';

            $stmt = Conexão::getConn()->prepare($sql);
            $stmt->execute();
            
            //necessário verificar se está consulta retornou algum resultado

            if ($stmt->rowCount() > 0) { //rowCount() -> OBTER A QUANTIDADE DE REGISTROS NO BANCO DE DADOS
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            }
        }

        public function update(Produto $p)
        {

        }

        public function delete($id)
        {

        }
    }