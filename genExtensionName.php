<?php
/**
 * 获取扩展名后缀
 */

function genExtension($fileName){
    $mytext = substr($fileName,strrpos($fileName,'.'));
    return str_replace('.','',$mytext);
}

$fileName = 'JIm.ed';
echo genExtension($fileName);