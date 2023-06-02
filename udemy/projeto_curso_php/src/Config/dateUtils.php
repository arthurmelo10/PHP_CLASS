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

function getDateFromInterval($interval)
{
    return new DateTimeImmutable($interval->format('%H:%i:%s'));
}

function getDateFromString(string $str)
{
    return DateTimeImmutable::createFromFormat('H:i:s', $str);
}