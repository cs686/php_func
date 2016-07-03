<?php
/**
 * 获取文件大小并且进行格式化
 */
function formatSize($size){
    $sizes = array('Bytes','MB','GB','TB','PB','EB');
    if ($size == 0) {
        return ('n/a');
    } else {
        return (round($size/pow(1024,($i = floor(log($size,q024)))),2).$sizes[$i]);
    }
}
$thefile = filesize('test_file.mp3');
echo formatSize($thefile);