<?php
/**
 * Converts CSV to multi dimensional array
 */
 

// function csv_to_multidimension_array($filename='', $delimiter=',')
// {
//     if(!file_exists($filename) || !is_readable($filename)) {
//         return false;
//     }
// 
//     $header = NULL;
//     $data = array();
// 
//     if (($handle = fopen($filename, 'r')) !== false) {
//         while (($row = fgetcsv($handle, 1000, $delimiter)) !== false ) {
//             $data[] = $row;
//         }
//         fclose($handle);
//     }
//     return $data;
// }
// 
// $masyvas = csv_to_multidimension_array('failas.csv');
// 
// print_r($masyvas);
// 
// 
// foreach($masyvas as $masyva){
// 
//     echo $masyva["CName"];
// 
// }



$lines =file('failas.csv');   // atsidarom faila kurio pavadinimas failas.csv


foreach($lines as $data)  // failas nuskaitomas po eilute naudojant cikla foreach
{

//"CName","FirstName","LastName","Sex","Title","StrNo","ZIPCity"

list($CName[],$FirstName[],$LastName[],$Sex[],$Title[],$StrNo[],$ZIPCity[]) = explode(',',$data); // stulpeliais sukarpo faila per kableli, po eilute

}


$ilgis = count($CName); //masyvo elementu suskaiciavimas

//echo $ilgis;


echo '<table border=1>';

echo  '<tr>';
echo  '    <th>ID</th>';
echo  '    <th>Firma</th>';
echo  '    <th>Vardas</th>';
echo  '    <th>Pavarde</th>';
echo  '    <th>Lytis</th>';
echo  '    <th>Titulas</th>';
echo  '    <th>Gatve</th>';
echo  '    <th>Pasto Kodas</th>';
echo  '  </tr>';

for($y = 0; $y < $ilgis; $y++)
{ 

echo  '<tr>';
echo  '    <th>'.$y.'</th>';
echo  '    <th>'.$CName[$y].'</th>';
echo  '    <th>'.$FirstName[$y].'</th>';
echo  '    <th>'.$LastName[$y].'</th>';
echo  '    <th>'.$Sex[$y].'</th>';
echo  '    <th>'.$Title[$y].'</th>';
echo  '    <th>'.$StrNo[$y].'</th>';
echo  '    <th>'.$ZIPCity[$y].'</th>';
echo  '</tr>';
}
    
   // echo $y,$CName[$y],$FirstName[$y],$LastName[$y],$Sex[$y],$Title[$y],$StrNo[$y],$ZIPCity[$y];
   // echo '<br>';

   // if($y %2 == 0)
    //{//
        //echo '==========================================';
        //echo '<br>';
   // };


echo '</table>';

//}


//echo $CName,$FirstName,$LastName,$Sex,$Title,$StrNo,$ZIPCity;

//echo $CName[],$FirstName[],$LastName[],$Sex[],$Title[],$StrNo[],$ZIPCity[];
