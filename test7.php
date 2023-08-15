<?php

echo '配列 $in は自然数または null を含む配列です。
この配列から null を取り除いてください。
加工後の配列は、連番の添字配列となるようにしてください。';

$in = [1, 2, null, 4, null, 6, 7];

//////////////////////////////////
$out = array_values(array_filter($in));
//////////////////////////////////

var_dump($out);

/*
array (size=5)
  0 => int 1
  1 => int 2
  2 => int 4
  3 => int 6
  4 => int 7
*/