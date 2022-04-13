<?php
    class Pedido 
    {
        public $numero;
        public $cliente;
    }

    class Cliente
    {
        public $nome;
        public $endereço;
    }

    $cliente = new Cliente();
    $cliente->nome = "Arthur Bezerra de Melo";
    $cliente->endereço = "Rua Manoel Dutra, 539, Bela Vista, SP";

    $pedido = new Pedido();
    $pedido->numero = "123";
    $pedido->cliente= $cliente; //associação

    $dados = array(
        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'endereço_cliente' => $pedido->cliente->endereço,
    );

    var_dump($dados);