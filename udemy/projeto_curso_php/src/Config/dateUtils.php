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
