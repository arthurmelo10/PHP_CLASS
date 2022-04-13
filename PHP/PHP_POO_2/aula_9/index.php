<?php
require 'classes/Produto.php';
require 'models/Produto.php';

use classes\Produto as productClass;
use models\Produto as productModel;

$produto = new productModel;
$produto->mostrarDetalhes();

$object = new productClass;
$object->mostrarDetalhes();