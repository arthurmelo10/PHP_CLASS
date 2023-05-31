<?php

function addSucessMessage(string $msg): void
{
    $_SESSION['message'] = [
        'type' => 'success',
        'message' => 'Ponto Inserido com sucesso',
    ];
}

function addErrorMessage(string $msg): void
{
    $_SESSION['message'] = [
        'type' => 'error',
        'message' => $msg,
    ];
}