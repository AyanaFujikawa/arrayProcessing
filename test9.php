<?php 

echo '$in はユーザマスタから取得した2次元配列です。
sex = 2 のレコードだけに絞ってください。';

$in = [
    [
        'id' => 1,
        'name' => '山田',
        'sex' => 2,
    ],
    [
        'id' => 2,
        'name' => '鈴木',
        'sex' => 2,
    ],
    [
        'id' => 3,
        'name' => '佐藤',
        'sex' => 1,
    ],
    [
        'id' => 4,
        'name' => '小林',
        'sex' => 2,
    ],
    [
        'id' => 5,
        'name' => '伊藤',
        'sex' => 1,
    ],
];

//////////////////////////////////
$out = array_filter($in, function($row){ return $row['sex'] === 2; });
//////////////////////////////////

var_dump($out);

/*
array (size=3)
  0 => 
    array (size=3)
      'id' => int 1
      'name' => string '山田' (length=6)
      'sex' => int 2
  1 => 
    array (size=3)
      'id' => int 2
      'name' => string '鈴木' (length=6)
      'sex' => int 2
  3 => 
    array (size=3)
      'id' => int 4
      'name' => string '小林' (length=6)
      'sex' => int 2
*/