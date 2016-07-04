<?php
/**
 * 验证码
 */

header("Content-Type:text/html;Charset=utf-8");
header("Content-Type:image/jpeg");
$img = imagecreatetruecolor(,);
$bgcolor = imagecolorallocate($img,);
imagefill($img,,,$bgcolor);
imagejpeg($img);
imagedestroy($img);