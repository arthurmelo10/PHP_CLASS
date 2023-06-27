<?php

function requireValidSession($requiresAdmin = false) {

    $user = $_SESSION['user'];

    if (!isset($user)) {
        header('Location: loginController.php');
        exit();
    }

    if ($requiresAdmin && !$user->is_admin) {
        addErrorMessage('Acesso negado');
        // header('Location: dayRecordsController.php');
        exit();
    }
}