<?php
session_start();
requireValidSession();
$exception = null;

loadModel('WorkingHours');

$today = date("d/m/Y");

$user = $_SESSION['user'];
$userWorkingHours = WorkingHours::loadFromUserAndDate($user->id, date("Y-m-d"));

loadTemplateView('dayRecordsView',
    [
        'today' => $today,
        'exception' => $exception,
        'userWorkingHours' => $userWorkingHours,
    ]
);