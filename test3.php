<?php
echo '$in は、ユーザマスタから取得した2次元配列です。
ユーザコードをキー、名前を値とする連想配列に加工してください。';

echo "\n";

$in = [
    [
        'id' => 1,
        'code' => 'S1001',
        'name' => '山田',
    ],
    [
        'id' => 2,
        'code' => 'S1003',
        'name' => '鈴木',
    ],
    [
        'id' => 3,
        'code' => 'S1002',
        'name' => '佐藤',
    ],
];

//////////////////////////////////
$out = array_column($in, 'name', 'code');
//////////////////////////////////

var_dump($out);

/*
array (size=3)
  'S1001' => string '山田' (length=6)
  'S1002' => string '鈴木' (length=6)
  'S1003' => string '佐藤' (length=6)
*/