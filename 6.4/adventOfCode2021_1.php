<?php 

$data = file('data/input.log');

$data_length = count($data);

$increaseC=0; 


for($i=0;$i<$data_length;$i++){


          if($data[$i]>$data[$i-1]==true){
                $increaseC++;
          }    
}

echo $increaseC."\n";
