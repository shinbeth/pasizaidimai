<?php 

$data = file('data/input.log');


//var_dump($data);

$data_length = count($data);

$increaseC=0; // pirmu spejimu prasukus cikla gavau per maza skaiciu
// pasistumdziau su offsetu ciklo ir vienintele mintis

for($i=1;$i<$data_length;$i++){

    
          if($data[$i]>$data[$i-1]==true){
            //echo $data[$i].'>'.$data[$i-1];
                $increaseC++;
          }
    

}

