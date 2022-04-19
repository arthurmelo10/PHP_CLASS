<?php

//padrão PRS4

//require_once 'vendor/autoload.php';
require_once '/App/Model/Produto.php';

//use \App\Model\Produto as ProdutoModel;

$produto = new \App\Model\Produto();
$produto->setNome('Notebook DELL');
$produto->setDescrição('i5, 4GB');

var_dump($produto);