<?php

function novaConexao($banco = 'curso_php') 
{
    $servidor = '0.0.0.0';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die('Error' . $conexao->connect_error);
    }

    return $conexao;
}