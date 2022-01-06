<?php




$lines =file('failas.csv');   // atsidarom faila kurio pavadinimas failas.csv


foreach($lines as $data)  // failas nuskaitomas po eilute naudojant cikla foreach
{


list($CName[],$Email[]) = explode(',',$data); // stulpeliais sukarpo faila per kableli, po eilute

}


$ilgis = count($CName); //masyvo elementu suskaiciavimas

//echo $ilgis;

echo '<datalist>'."\n";
for($y = 1; $y < $ilgis-1; $y++)
{ 
    
    
    
    echo '<option>'.$CName[$y].' '.$Email[$y].'</option>'."\n";
    


    
    if($y %2 == 0)
    {
        //echo '==========================================';
        //echo '<br>';
    };



}

echo "\n".'</datalist>';
