<!DOCTYPE html>
<?php 

$pirmas = $_POST[pirmas];
$antras = $_POST[antras];
$operator = $_POST[operator];


//$trecias = $pirmas + $antras;

//echo $pirmas.'+'.$antras.'='.$trecias;


switch ($operator){

    case '+':
        echo $pirmas.$operator.$antras.'=';
        echo $pirmas + $antras;
        break;
    case '-':
        echo $pirmas.$operator.$antras.'=';
        echo $pirmas - $antras;
        break;
    case '/':
        echo $pirmas.$operator.$antras.'=';
        echo $pirmas / $antras;
        break;
    case '*':
        echo $pirmas.$operator.$antras.'=';
        echo $pirmas * $antras;
        break;

        


}
