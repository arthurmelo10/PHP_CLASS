<?php

function requireValidSession() {
    if (!isset($_SESSION['user'])) {
        header('Location: loginController.php');
        exit();
    }
}