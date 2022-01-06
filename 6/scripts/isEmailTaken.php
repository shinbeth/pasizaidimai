<?php 
//TODO: emailo validatorius

$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$emailas = $_POST['emailas'];
$firma = $_POST['firma'];

$lines =file('data/failas.csv');   // atsidarom faila kurio pavadinimas failas.csv


foreach($lines as $data)  // failas nuskaitomas po eilute naudojant cikla foreach
{

//"CName","FirstName","LastName","Sex","Title","StrNo","ZIPCity"

list($FirstName[],$LastName[],$Email[],$CName[]) = explode(',',$data); // stulpeliais sukarpo faila per kableli, po eilute

}




foreach ($Email as $subarray)
{
   if(!in_array($emailas, $subarray))
   {
        $myfile = fopen("../data/newfile.csv", "a") or die("Unable to open file!");



        $txt = $vardas.','.$pavarde.','.$emailas.','.$firma."\n";

        fwrite($myfile, $txt);
        fclose($myfile);

   }
}



