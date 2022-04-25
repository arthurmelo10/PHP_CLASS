<?php

//padrão PRS4

//require_once 'vendor/autoload.php';
require 'App/Model/Produto.php';
require 'App/Model/ProdutoDao.php';

//use \App\Model\Produto as ProdutoModel;

$produto = new \App\Model\Produto();
$produto->setNome('Notebook DELL');
$produto->setDescrição('i5, 4GB');

//var_dump($produto);

//CREATE
$produtoDao = new \App\Model\ProdutoDao(); 
$produtoDao->create($produto);
$produtoDao->read();

//READ - retorno página vazia
foreach($produtoDao->read() as $produto) {
    echo $produto['nome']."<br>".$produto['descrição']."<hr>";
}

//seria uma array vazio 

// UPDATE
$produto->setId(8);
$produto->setNome("Cadeira");
$produto->setDescrição("Gamer");
$produtoDao->update($produto);

$produto->setId(7);
$produto->setNome('Janela');
$produto->setDescrição('Vidro');
$produtoDao->update($produto);

//DELETE
//Somente passar o id do registro a ser exlcuído
$produtoDao->delete(4);
$produtoDao->delete(8);