<?php
/**
 * PHP 加密和解密字符串放在数据库用里面,并通过可逆解密字符串,同时使用了MD5和base64加密和解密
 */

/**
 * @param 参数
 * @param 加密字符串
 * @param 加密(0)或解密(1)
 *
 * @return 结果
 */
function encryptDecrypt($key,$string,$decrypt){
    if ($decrypt){
        $decrypt = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,md5($key),base64_decode($string),MCRYPT_MODE_CBC,md5(md5($key),'12')));
        return $decrypt;
    } else {
        $encrypt = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,md5($key),$string,MCRYPT_MODE_CBC,md5(md5($key))));
        return $encrypt;
    }
}

/**
 * 加密
 */
echo encryptDecrypt('password','hello world',0);
/**
 * 解密
 */
//echo encryptDecrypt('password','解密字符串',1);