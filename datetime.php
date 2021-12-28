<?php

$required_format = "Y-m-d h:i:s";

function get_time_difference_string($date_string_1, $date_string_2)
{
    $date1 = date_create($date_string_1);
    $date2 = date_create($date_string_2);

    $interval = date_diff($date1, $date2);

    if ($interval->y != 0) {
        return $interval->format("%y ") .
            ($interval->y > 1 ? "years" : "year") .
            " ago";
    }

    if ($interval->m != 0) {
        return $interval->format("%m ") .
            ($interval->m > 1 ? "months" : "month") .
            " ago";
    }

    if ($interval->d != 0) {
        return $interval->format("%d ") .
            ($interval->d > 1 ? "days" : "day") .
            " ago";
    }
    if ($interval->h != 0) {
        return $interval->format("%h ") .
            ($interval->h > 1 ? "hours" : "hour") .
            " ago";
    }
    if ($interval->i != 0) {
        return $interval->format("%i ") .
            ($interval->i > 1 ? "minutes" : "minute") .
            " ago";
    }
    if ($interval->s != 0) {
        return $interval->format("%s ") .
            ($interval->s > 1 ? "seconds" : "second") .
            " ago";
    }
}

?>
