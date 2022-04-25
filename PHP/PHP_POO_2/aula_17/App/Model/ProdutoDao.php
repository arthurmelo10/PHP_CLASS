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
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); //executamos a query e depois verificamos se existe pelo menos um registroi no banco de dados 
                return $resultado;
            }

            return [];

            //fetchAll -> retorna um array com todos os resultados
        }

        public function update(Produto $p)
        {
            $sql = 'UPDATE produtos SET n0ome = ?, descrição = ? WHERE  id = ?';

            $stmt = Conexão::getConn()->prepare($sql);
            //Associar os bind values
            $stmt->bindValue(1, $p->getnnNNome());
            $stmt->bindValue(2, $p->getDescrição());
            $stmt->bindValue(3, $p->getId());

            $stmt->execute();
        }

        public function delete($id)
        {
            $sql = 'DELETE FROM produtos WHERE id = ?';

            $stmt = Conexão::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

        }
    }