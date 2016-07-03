<?php
/**
 * 随机生成一个字符串,可以控制字符串的长度
 */
function generateRandomString($length ){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0 ;$i<$length;$i++){
        $randomString .=$characters[rand(0,strlen($characters)-1)];
    }
    return $randomString;
}

echo generateRandomString(20);