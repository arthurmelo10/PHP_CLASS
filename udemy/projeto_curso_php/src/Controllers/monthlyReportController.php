<?php
session_start();
requireValidSession();

$currentDate = new DateTime();

$user = $_SESSION['user'];
$selectedUserId = $user->id;
$users = [];
if ($user->is_admin) {
    $users = User::get();
    $selectedUserId = isset($_POST['user']) ? $_POST['user'] : $user->id; 
}

$selectedPeriod = isset($_POST['period']) ? $_POST['period'] : $currentDate->format('Y-m');
$periods = [];

for ($yearDiff = 0; $yearDiff <= 1; $yearDiff++) {
    $year = date('Y') - $yearDiff;
    for ($month = 12; $month >= 1; $month--) {
        $date = new DateTime("$year-$month-1");
        $periods[$date->format('Y-m')] = date_format($date, 'F, Y');
    }
}

$registries = WorkingHours::getMonthlyReport($selectedUserId, $selectedPeriod);
$report = [];
$workDay = 0;
$sumOfWorkedTime = 0;
$lastDay = getLastDayOfMonth($selectedPeriod)->format('d');

for ($day = 1; $day <= $lastDay; $day++) {

    $date = $selectedPeriod . '-' . sprintf('%02d', $day);
    
    if (isWeekend($date) || !isBefore($date, $currentDate)) {
        continue;
    }

    if (!array_key_exists($date, $registries)) {
        continue;
    }

    $registry = $registries[$date];

    if (isValuableWorkDay($date)) $workDay++;

    if ($registry) {
        $sumOfWorkedTime += $registry->worked_time;
        array_push($report , $registry);
    } else {
        array_push($report , new WorkingHours([
            'work_date' => $date,
            'worked_time' => 0,
        ]));
    }
}

$expectedTime = $workDay * DAILY_TIME;
$balance = getTimeStringFromSeconds(abs($sumOfWorkedTime - $expectedTime));
$sign = ($sumOfWorkedTime >= $expectedTime) ? '+' : '-';

loadTemplateView('monthlyReportView',
    [
        'report' => $report,
        'sumOfWorkedTime' => getTimeStringFromSeconds($sumOfWorkedTime),
        'balance' => "$sign $balance",
        'selectedPeriod' => $selectedPeriod,
        'periods' => $periods,
        'users' => $users,
        'selectedUserId' => $selectedUserId
    ]
);