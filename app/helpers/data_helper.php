<?php

// For strings
function str($header) {
    return function ($a, $b) use ($header) {
        $a = (array)$a;
        $b = (array)$b;

        /*
         * Sorting direction:
         * 1 = ASC
         * -1 = DESC
         */
        $result = 1 * strcmp(strtoupper($a[$header]), strtoupper($b[$header]));
        return $result;
    };
}

function sortStr($data, $header) {

    usort($data, str($header));
    return $data;
}

// For numbers
function num($header) {
    return function ($a, $b) use ($header) {
        $a = (array)$a;
        $b = (array)$b;

        if ($a[$header] == $b[$header]) {
            return 0;
        }
        return ($a[$header] < $b[$header]) ? -1 : 1;
    };
}

function sortNum($data, $header) {

    usort($data, num($header));
    return $data;
}