<?php

function getDateAsDateTime($date): DateTime
{
    return is_string($date) ? new DateTime($date) : $date;
}

function isWeekend($date): bool
{
    $inputDate = getDateAsDateTime($date);

    return $inputDate->format('N') >= 6;
}

function isBefore($date1, $date2): bool 
{
    $inputDate1 = getDateAsDateTime($date1);

    $inputDate2 = getDateAsDateTime($date2);

    return $inputDate1 <= $inputDate2;
}

function getNextDay($date)
{
    $inputDate = getDateAsDateTime($date);

    $inputDate->modify('+1 day');

    return $inputDate;
}

function sumIntervals($interval1, $interval2): DateInterval
{
    $date = new DateTime('00:00:00');
    $date->add($interval1);
    $date->add($interval2);

    return (new DateTime('00:00:00'))->diff($date);
}

function subtractIntervals($interval1, $interval2): DateInterval
{
    $date = new DateTime('00:00:00');
    $date->add($interval1);
    $date->sub($interval2);

    return (new DateTime('00:00:00'))->diff($date);
}

function getDateFromInterval($interval): DateTimeImmutable
{
    return new DateTimeImmutable($interval->format('%H:%i:%s'));
}

function getDateFromString(string $str): DateTimeImmutable
{
    return DateTimeImmutable::createFromFormat('H:i:s', $str);
}


function getFirstDayOfMonth ($date): DateTime
{
    $time = getDateAsDateTime($date)->getTimestamp();

    return new DateTime(date('Y-m-1', $time));
}

function getLastDayOfMonth ($date): DateTime
{
    $time = getDateAsDateTime($date)->getTimestamp();

    return new DateTime(date('Y-m-t', $time));
}

function getSecondsFromDateInterval ($interval): int
{
    $d1 = new DateTimeImmutable();
    $d2 = $d1->add($interval);

    return $d2->getTimestamp() - $d1->getTimestamp();
}

function isValuableWorkDay($date): bool
{
    return !isWeekend($date) && isBefore($date, new DateTime());
}

function getTimeStringFromSeconds($seconds)
{
    $hora = intdiv($seconds, 3600);
    $minuto = intdiv($seconds % 3600, 60);
    $segundos = $seconds - ($hora * 3600) - ($minuto * 60);

    return sprintf('%02d:%02d:%02d', $hora, $minuto, $segundos);
}

function formatDateWihtLocale($date, $pattern)
{
    $time = getDateAsDateTime($date);

    return date_format($time, $pattern);
}