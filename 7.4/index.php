<?php 


$data =file('temp_cur_valiutos.list');   
$metaprogram = fopen("cur_valiutos.php", "w") or die("Unable to open file!");

$curRates = array();

foreach($data as $lines)  
{
$txt = '$'.trim($lines)."\n";
fwrite($metaprogram, $txt);
echo $txt;
}

fclose($metaprogram);


print_r($curRates);


include 'cur_valiutos.php';


echo 'USD: '.$curRates["USD"];
