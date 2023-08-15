<?php
echo '$in1 はユーザから POST されたデータの格納された連想配列です。
この連想配列から、ホワイトリスト $in2 に含まれないキーを全て削除してください。';

$in1 = [
    'id' => 2,
    'xxx' => 'yyy',
    'code' => 'S1003',
    'name' => '鈴木',
    'zzz' => 'www',
];

$in2 = ['id', 'code', 'name'];

//////////////////////////////////
$out = array_intersect_key($in1, array_flip($in2));
//////////////////////////////////

var_dump($out);

/*
array (size=3)
  'id' => int 2
  'code' => string 'S1003' (length=5)
  'name' => string '鈴木' (length=6)
*/