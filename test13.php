<?php

echo 'スネークケースをパスカルケースに変換してください。';

$in = 'this_is_an_apple';

//////////////////////////////////
$out = join('', array_map('ucfirst', explode('_', $in)));
//////////////////////////////////

var_dump($out);

/*
string 'ThisIsAnApple' (length=13)
*/