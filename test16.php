<?php
echo '$in1 はユーザマスタから取得した2次元配列、
$in2 は都道府県マスタから取得した2次元配列です。
$in1 の各要素に都道府県名 pref_name を追加してください。';

$in1 = [
    [
        'id' => 1,
        'name' => '山田',
        'pref' => 27,
    ],
    [
        'id' => 2,
        'name' => '鈴木',
        'pref' => 26,
    ],
    [
        'id' => 3,
        'name' => '佐藤',
        'pref' => 13,
    ],
    [
        'id' => 4,
        'name' => '小林',
        'pref' => null,
    ],
];

$in2 = [
    [
        'pref_id' => 13,
        'pref_name' => '東京',
    ],
    [
        'pref_id' => 26,
        'pref_name' => '京都',
    ],
    [
        'pref_id' => 27,
        'pref_name' => '大阪',
    ],
    [
        'pref_id' => 28,
        'pref_name' => '神戸',
    ],
];

//////////////////////////////////
$prefs_assoc = array_column($in2, 'pref_name', 'pref_id');
$out = array_map(function ($row) use ($prefs_assoc) {
    $row['pref_name'] = $prefs_assoc[$row['pref']] ?? null;
    return $row;
}, $in1);

//////////////////////////////////

var_dump($out);

/*
array (size=4)
  0 => 
    array (size=4)
      'id' => int 1
      'name' => string '山田' (length=6)
      'pref' => int 27
      'pref_name' => string '大阪' (length=6)
  1 => 
    array (size=4)
      'id' => int 2
      'name' => string '鈴木' (length=6)
      'pref' => int 26
      'pref_name' => string '京都' (length=6)
  2 => 
    array (size=4)
      'id' => int 3
      'name' => string '佐藤' (length=6)
      'pref' => int 13
      'pref_name' => string '東京' (length=6)
  3 => 
    array (size=4)
      'id' => int 4
      'name' => string '小林' (length=6)
      'pref' => null
      'pref_name' => null
*/