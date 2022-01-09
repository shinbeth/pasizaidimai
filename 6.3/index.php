<?php

/*
    Labai geras mindfuck algoritmas pradedantiems programuotojams
    
    https://en.wikipedia.org/wiki/Luhn_algorithm
    
    neturiu pakankamai deramu pavyzdziu kad patikrinciau ar veikia 100%
    rasiau uzsikovidines ir net paciam ne viskas aisku.
    
*/

function luhnAlgo( $serial ){
$serialA = str_split( substr( strrev($serial) , 1, strlen($serial) ));
$checksum = substr(strrev($serial), 0,1);
$index=0;
$checkMas = 0;
foreach($serialA as $digit){
//echo $digit."\n";
    if($index%2!=0){
        $checkMas+=$digit;
        //echo $digit."\n";
    }else{ //echo $digit."\n";
            $checkTemp=$digit*2;
            if($checkTemp < 10){
                $checkMas+=$checkTemp;
            }else{ 
                    $dDigit=str_split($checkTemp); 
                    $checkMas+=$dDigit[0];
                    $checkMas+=$dDigit[1];
                    //echo $dDigit;
                }
        }
$index++;
}
$result = ($checkMas+$checksum)%10;
if($result%10!=0){
    echo $serial.' is invalid ('.$checkMas.' + '.$checksum.')mod10 = '.$result."\n"; return false;
}else{echo $serial.' is valid ('.$checkMas.' + '.$checksum.')mod10 = ',$result."\n"; return true;}
}
luhnAlgo('79927398713');
luhnAlgo('4003600000000014');
luhnAlgo('79927398712');
luhnAlgo('4003600000000015');
