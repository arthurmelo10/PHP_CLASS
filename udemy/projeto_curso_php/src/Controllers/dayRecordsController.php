<?php
session_start();
requireValidSession();
$exception = null;

loadModel('WorkingHours');

$today = date("d/m/Y");

loadTemplateView('dayRecordsView',
    [
        'today' => $today,
        'exception' => $exception,
    ]
);