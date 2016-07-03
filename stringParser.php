<?php
/**
 * 将字符替换成指定的字符
 */
function stringParser($string,$replacer){
    $result = str_replace(array_keys($replacer),array_values($replacer),$string);
    return $string;
}