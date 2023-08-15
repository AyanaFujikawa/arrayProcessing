<?php
echo '$in1 は tbl テーブルの更新内容、
$in2 は更新対象のIDです。
これらを元に UPDATE 文を作成してください。';

$in1 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
];

$in2 = 99;

//////////////////////////////////
$set = join(', ', array_map(function ($key, $value) {
    return "{$key} = {$value}";
}, array_keys($in1), array_values($in1)));

$out = "UPDATE tbl SET {$set} WHERE id = {$in2}";
//////////////////////////////////

var_dump($out);

/*
string 'UPDATE tbl SET a = 1, b = 2, c = 3, d = 4 WHERE id = 99' (length=55)
*/