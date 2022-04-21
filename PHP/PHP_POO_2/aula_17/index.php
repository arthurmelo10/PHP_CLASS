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

$produtoDao = new \App\Model\ProdutoDao(); 
$produtoDao->create($produto);
$produtoDao->read();

foreach($produtoDao->read() as $produto) {
    echo $produto['nome']."<br>".$produto['descrição']."<hr>";
}