<?php 


$data =file('temp_cur_valiutos.list');   
$metaprogram = fopen("cur_valiutos.php", "w") or die("Unable to open file!");

$curRates = array();

$txt = '<?php'."\n";
fwrite($metaprogram, $txt);

foreach($data as $lines)  
{
$txt = '$'.trim($lines)."\n";
fwrite($metaprogram, $txt);
//echo $txt;
}

$txt = '?>'."\n";
fwrite($metaprogram, $txt);

fclose($metaprogram);



include 'cur_valiutos.php';


echo 'USD: '.$curRates["USD"]."\n";
