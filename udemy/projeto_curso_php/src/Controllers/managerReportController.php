<?php
session_start();
requireValidSession();


$activeUsers = User::getActiveUsers();
$absentUsers = WorkingHours::getAbsentUsers();

$date = (new DateTime())->format('Y-m');
$seconds = WorkingHours::getWorkedTimeInMonth($date); // vai me dar todos os segundos trabalhados

$hours = explode(':', getTimeStringFromSeconds($seconds))[0];


loadTemplateView('managerReportView',[
    'activeUsers' => $activeUsers,
    'absentUsers' => $absentUsers,
    'date' => $date,
    'seconds' => $seconds,
    'hours' => $hours,
]);