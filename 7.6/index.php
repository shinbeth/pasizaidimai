<!DOCTYPE html>

<html>
        <head>

            <title> Geimas </title>
        
        </head>
            
        <body>
        
                <p> vaskinimas </p>            
            
            <div class="content">
                <form action="game.php" method="post">                    
                <select name="operator">
                    <option value="zirkles">zirkles</option>
                    <option value="popierius">popierius</option>
                    <option value="akmuo">akmuo</option>
                </select>
                    <input type="submit" value="OK" name="submit" />
                </form>
            </div>
            
<?php

$laimejmai =0;
$pralaimejimai =0;
$lygiosios =0;

$lines =file('history.csv');   // atsidarom faila kurio pavadinimas failas.csv

foreach($lines as $data)  // failas nuskaitomas po eilute naudojant cikla foreach
{

list($vienas[],$du[],$trys[]) = explode(';',$data); // stulpeliais sukarpo faila per kableli, po eilute

}
$rezai = array_count_values($trys);
print_r($rezai);
$ilgis = count($vienas); //masyvo elementu suskaiciavimas

echo '<table border=1>';

for($y = $ilgis; $y > 0; $y--)
{ 
echo  '<tr>';
echo  '    <th>'.$vienas[$y].'</th>';
echo  '    <th>'.$du[$y].'</th>';
echo  '    <th>'.$trys[$y].'</th>';
echo  '</tr>';
}
    
echo '</table>';

?>
        </body>
        
</html>
        
