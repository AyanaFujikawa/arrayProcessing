<?php
echo '$in1 は ユーザコード => 名前 の連想配列です。
名前 $in2 をもとに該当するユーザコードを取得してください。';

$in1 = [
    'S1001' => '山田',
    'S1002' => '鈴木',
    'S1003' => '佐藤',
];

$in2 = '鈴木';

//////////////////////////////////
$out = array_search($in2, $in1);
//////////////////////////////////

var_dump($out);

/*
string 'S1002' (length=5)
*/