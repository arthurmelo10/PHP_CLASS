<?php
session_start();
requireValidSession();
$exception = null;

loadTemplateView('saveUserView', [
    'exception' => $exception
]);