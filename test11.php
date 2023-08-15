<?php
echo '$in はテーブル tbl に追加したいデータであり、
カラム名 => 値 の連想配列となっています。
この配列からINSERT文を生成してください。';

$in = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
];

//////////////////////////////////
$into = join(', ', array_keys($in));
$values = join(', ', array_values($in));

$out = "INSERT INTO tbl({$into}) VALUES({$values})";
//////////////////////////////////

var_dump($out);

/*
string 'INSERT INTO tbl(a, b, c, d) VALUES(1, 2, 3, 4)' (length=46)
*/