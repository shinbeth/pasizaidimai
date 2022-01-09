<?php



function luhnAlgo( $serial ){


// echo strlen($serial)."\n";

// echo substr($serial, -1, 1 )."\n";

// echo substr($serial, 0, strlen($serial)-1)."\n";

//$serialA = str_split( substr($serial, 0, strlen($serial)-1) );

// echo substr($serial, strlen($serial)-1, strlen($serial))."\n";

//$checksum = substr($serial, strlen($serial)-1, strlen($serial));

$serialA = str_split( substr( strrev($serial) , 1, strlen($serial) ));

$checksum = substr(strrev($serial), 0,1);


// print_r($serialA);

echo $checksum;

print_r($serialA);

$checkMas = 0;

for($iL=0;$iL<count($serialA)+1;$iL++){

    if(($iL+1)%2!=0){
        $checkMas+=$serialA[$iL];
    };
    if(($iL+1)%2==0){
        $checkTemp = $serialA[$iL]*2;
        
            if($checkTemp > 9){
                
                $checkArr = str_split($checkTemp);
                    $checkTemp = $checkArr[0]+$checkArr[1];
                    $checkMas+=$checkTemp;
                
                
            }else{$checkMas+=$checkTemp;};
    };

};

if($checkMas % 10 !=0){
    echo 'invalid';
}else{echo 'valid';};

//$mSb = str_split( $mSa, count($mSa)-1);

echo $checkMas;

//print_r( $mbS[0]);

}


luhnAlgo('4003600000000014');
