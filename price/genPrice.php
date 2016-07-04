<?php
function gen_rand($proArr){
    $result = '';
    $proNum = array_sum($proArr);

    foreach ($proArr as $key => $proCur){
        $randNum = mt_rand(1,$proNum);
        if ($randNum <= $proCur){
            $result = $key;
            break;
        } else {
            $proNum -= $proCur;
        }
    }
    unset($proArr);
    return $result;
}


$prize_arr = array(
    '0' => array('id'=>1,'prize'=>'平板电脑','v'=>1),
    '1' => array('id'=>2,'prize'=>'数码相机','v'=>5),
    '2' => array('id'=>3,'prize'=>'音箱设备','v'=>10),
    '3' => array('id'=>4,'prize'=>'4G优盘','v'=>12),
    '4' => array('id'=>5,'prize'=>'10Q币','v'=>22),
    '5' => array('id'=>6,'prize'=>'下次没准就能中哦','v'=>1000),
);

foreach ($prize_arr as $key => $val){
    $arr[$val['v']] = $val['v'];
}
$rid = gen_rand($arr);
$res['yes'] = $prize_arr[$rid-1]['prize'];
unset($prize_arr[$rid-1]);
shuffle($prize_arr);
for ($i=0;$i<count($prize_arr);$i++){
    $pr[] = $prize_arr[$i]['prize'];
}
$res['no'] = $pr;
print_r($res);