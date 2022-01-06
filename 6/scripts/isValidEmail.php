<?php 
//TODO: emailo validatorius

$Email = $_POST[emailas];

$lines =file('data/failas.csv');   // atsidarom faila kurio pavadinimas failas.csv


foreach($lines as $data)  // failas nuskaitomas po eilute naudojant cikla foreach
{

//"CName","FirstName","LastName","Sex","Title","StrNo","ZIPCity"

list($FirstName[],$LastName[],$Email[],$CName[]) = explode(',',$data); // stulpeliais sukarpo faila per kableli, po eilute

}




// while (list($key, $line) = each($lines) and !$line_number) {
// 
//    $line_number = (strpos($line, $search) !== FALSE);
// 
// }


foreach ($Email as $subarray)
{
   if(!in_array('hello', $subarray))
   {
      echo 'echo the value';
   }
}



if($line_number){

   echo "Results found for " .$search;

}

else{
   echo "No results found for $search";
}
