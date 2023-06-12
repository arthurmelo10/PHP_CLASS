<?php
session_start();
requireValidSession();
$exception = null;


$today = date("d/m/Y");

loadTemplateView('dayRecordsView',
    [
        'today' => $today,
        'exception' => $exception,
    ]
);