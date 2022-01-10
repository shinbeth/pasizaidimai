<?php

// second part of https://adventofcode.com/2021/day/1

$data = file('../6.4/data/input.log');

$data_length = count($data)-4;

$increaseC=0; 

for($i=0;$i<=$data_length;$i++){
          if(($data[$i]+$data[$i+1]+$data[$i+2])<($data[$i+1]+$data[$i+2]+$data[$i+3])){
                $increaseC++;
          }    
}
echo $increaseC."\n";
