<?php

//date('d.m.Y',strtotime("-1 days"));

$current_year = date("Y");
$current_month = date("m");
$current_day = date("d");


$yesterday_year = date('Y',strtotime("-1 days"));
$yesterday_month = date('m',strtotime("-1 days"));
$yesterday_day = date('d',strtotime("-1 days"));


// https://www.lb.lt/lt/currency/buhalteriniaiexport/?csv=1&class=Lt&type=day&date_day=2022-01-11
$base_url = 'https://www.lb.lt/lt/currency/buhalteriniaiexport/?csv=1&class=Lt&type=day&date_day=';
$yesterday_url = $base_url.$yesterday_year.'-'.$yesterday_month.'-'.$yesterday_day;
$current_url = $base_url.$current_year.'-'.$current_month.'-'.$current_day;


$current_data = file($current_url);
$yesterday_data = file($yesterday_url);
//"Valiutos pavadinimas";"Valiutos kodas";"Santykis";"Data"
foreach($current_data as $lines)  {

list($curName[],$curCode[],$curRatioToEur[],$curDate[]) = explode(';',$lines); 

}

foreach($yesterday_data as $lines)  {

list($yesName[],$yesCode[],$yesRatioToEur[],$yesDate[]) = explode(';',$lines); 

}

$length = count($curName); 
echo '<html>';
echo '<body>';
echo '<table border=1>';

for($y = 0; $y < $length; $y++)
{ 
$curTemp = str_replace(',','.',trim($curRatioToEur[$y],'"'));
$yesTemp = str_replace(',','.',trim($yesRatioToEur[$y],'"'));
$oneDayChange = (float)$curTemp - (float)$yesTemp;

echo  '<tr>';
echo  '    <th style="text-align:left">'.$curName[$y].'</th>';
echo  '    <th>'.$curDate[$y].'</th>';
echo  '    <th>'.$curCode[$y].'</th>';
echo  '    <th>'.str_replace(',','.',trim($curRatioToEur[$y],'"')).'</th>';
echo  '    <th>'.$oneDayChange.'</th>';
echo  '</tr>';
}

echo '</table>';
echo '</body>';
echo '</html>';
