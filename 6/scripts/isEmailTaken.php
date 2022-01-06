<?php 
//TODO: emailo validatorius

$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$emailas = $_POST['emailas'];
$firma = $_POST['firma'];

$lines =file('../data/failas.csv');   // atsidarom faila kurio pavadinimas failas.csv


foreach($lines as $data)  // failas nuskaitomas po eilute naudojant cikla foreach
{

list($FirstName[],$LastName[],$Email[],$CName[]) = explode(',',$data); // stulpeliais sukarpo faila per kableli, po eilute

}



// tikrinimas pagal emaila kaip pagal unikalu identifikatoriu ar irasas egzistuoja
   if(!in_array($emailas, $Email))
   {
        $myfile = fopen("../data/failas.csv", "a") or die("Unable to open file!");
        echo 'Irasas pridetas';


        $txt = $vardas.','.$pavarde.','.$emailas.','.$firma."\n";

        fwrite($myfile, $txt);
        fclose($myfile);





}else{

        echo 'irasas jau egzistuoja';
}
