<?php

function isInteger($value) {
    return gettype($value) == "integer" ? true : false;
}

function randomString($length = 5, $string= "0123456789abcdefghijklmnopqrstuvwxyz_" ) {
    return substr(str_shuffle($string), 0, $length);
}

// calling through blade
// console.log(`{{laugh("Anu")}}`) 