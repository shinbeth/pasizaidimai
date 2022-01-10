<?php

// first part of https://adventofcode.com/2021/day/2

$data = file('./data/input.log');

$data_length = count($data);

$x=0;
$y=0;

//print_r($data);

foreach($data as $lines){   list($direction[],$amount[]) = explode(' ',$lines);   } 

for($i=0;$i<$data_length;$i++){

switch($direction[$i]){
    case 'forward':
        $x+=$amount[$i];
        break;
    case 'up':
        $y-=$amount[$i];
        break;
    case 'down':
        $y+=$amount[$i];
        break;
}

}

echo 'x: '.$x.' y: '.$y."\n";
echo 'Answer: '.$x*$y."\n";




