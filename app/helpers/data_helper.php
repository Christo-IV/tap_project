<?php

function cmp($header) {
    return function ($a, $b) use ($header) {
        $a = (array)$a;
        $b = (array)$b;

        $result = 1 * strcmp(strtoupper($a[$header]), strtoupper($b[$header]));
        return $result;
    };


};

function sortStr($data, $header) {

    usort($data, cmp($header));
    return $data;
}