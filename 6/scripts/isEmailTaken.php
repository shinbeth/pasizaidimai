<?php 
//TODO: firmos pavadinimo dejimas i kabutes

/*

    ucwords() funkcija paupercasina pirma raide
    o joje panaudotas strtolower dar pries tai viska 
    nulowerina kad nebutu daugiau didziuju raidziu nei pirmoji

*/

$vardas = ucwords(strtolower($_POST['vardas'])); 
$pavarde = ucwords(strtolower($_POST['pavarde']));

// strtolower() nulowercasina emaila
$emailas = strtolower($_POST['emailas']); 


$firma = $_POST['firma'];


if (filter_var($emailas, FILTER_VALIDATE_EMAIL)) {
  //echo("$emailas is a valid email address");
} else {
        die("<b>$emailas</b> negalimas emailas!");
        }


$lines =file('../data/failas.csv');   // atsidarom faila kurio pavadinimas failas.csv


foreach($lines as $data)  // failas nuskaitomas po eilute naudojant cikla foreach
    {

        list($FirstName[],$LastName[],$Email[],$CName[]) = explode(',',$data); // stulpeliais sukarpo faila per kableli, po eilute

    }



// tikrinimas pagal emaila kaip pagal unikalu identifikatoriu ar irasas egzistuoja
if(!in_array($emailas, $Email))
   {
        $myfile = fopen("../data/failas.csv", "a") or die("Unable to open file!");
        

        $txt = $vardas.','.$pavarde.','.$emailas.','.$firma.','."\n";

        fwrite($myfile, $txt);
        fclose($myfile);
        die('Irasas pridetas');

    }else{
    
        die('irasas jau egzistuoja');
        
         }
