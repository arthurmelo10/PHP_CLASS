<?php

function addSucessMessage(string $msg): void
{
    $_SESSION['message'] = [
        'type' => 'success',
        'message' => $msg,
    ];
}

function addErrorMessage(string $msg): void
{
    $_SESSION['message'] = [
        'type' => 'error',
        'message' => $msg,
    ];
}