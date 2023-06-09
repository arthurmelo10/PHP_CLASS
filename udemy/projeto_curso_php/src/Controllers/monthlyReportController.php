<?php
session_start();
requireValidSession();

$currentDate = new DateTime();
//$lastMonth = $currentDate->modify('-1 month')->format('Y-m-d');

$user = $_SESSION['user'];

$registries = WorkingHours::getMonthlyReport($user->id, $currentDate);
$report = [];
$workDay = 0;
$sumOfWorkedTime = 0;
$lastDay = getLastDayOfMonth($currentDate)->format('d');

for ($day = 1; $day <= $lastDay; $day++) {

    $date = $currentDate->format('Y-m') . '-' . sprintf('%02d', $day);

    if (!isWeekend($date) && isBefore($date, $currentDate)) {
        if (array_key_exists($date, $registries)) {
            $registry = $registries[$date];
        }
    }

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
        'sumOfWorkedTime' => $sumOfWorkedTime,
        'balance' => "$sign $balance"
    ]
);

