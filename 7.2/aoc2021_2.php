<?php

// first part of https://adventofcode.com/2021/day/2

$data = file('./data/input.log');

$data_length = count($data);

$x=0;
$y=0;

foreach($data as $lines){   list($direction[],$amount[]) = explode(' ',$lines);   } 

for($i=0;$i<$data_length;$i++){



switch($direction[$i]){
    case 'forward':
        $x+=(int)$amount[$i];
        break;
    case 'up':
        $y-=(int)$amount[$i];
        break;
    case 'down':
        $y+=(int)$amount[$i];
        break;
}

}

echo 'x: '.$x.' y: '.$y."\n";
echo 'Answer: '.$x*$y."\n";




