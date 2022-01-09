<?php
/*
    Pamastymui kodel taip neaiskiai parasiau koda, pasakyciau tik tiek, kad
    tai yra pavyzdys kodel yra naudinga diskrecioji matematika ir matematinis
    poziuris, bereikalingai netrumpinau nei lines nei data kintamuju pavadinimu
    pvz nors kaikurios programavimo/skriptinimo kalbos ir leidzia kintamuju 
    pavadinimus pradeti ar net vadinti skaiciais, taciau nezinomieji ar kintamieji
    geriau vadinami raidemis, o raides zinoma turi seka kaip pvz
    
    a: 1  
    b: 2
    c: 3
    d: 4
    
    Ir tai nera tiesiog skaiciai, tai yra aibes
    
    Siuo atveju isbarscius koda su per daug nauju eiluciu, mano manymu neretam neprogramuotojui
    butu kaip tik maziau aisku kas cia vyksta. Zinoma esu dekingas, kad php su savo C-like,
    sintakse yra lanksti ir nefasistiska kaip koks pythonas kas leidzia vizualiai ivairiau
    lankstyti koda.    
    
*/

//failas pasikraunamas i masyva
$data = file('data/pep_tal.csv');
// failas nuskaitomas po eilute naudojant cikla foreach
// stulpeliais sukarpo faila per kabliataski, po eilute
foreach($data as $lines){   list($a[],$b[],$c[],$d[]) = explode(';',$lines);   } 
// psiaudo atsitiktinio kauliuku ridenimo budu pasirenkami keturiu aibiu nariai ir atspausdinami i ekrana
// panasiu principu kaip kazino aparato sukime kur kokie tai paveiksleliai turi but vienoti kazkiek kartu is eiles.
// //echo $a[rand(0,count($a)-1)].' '.$b[rand(0,count($b)-1)].' '.$c[rand(0,count($c)-1)].' '.$d[rand(0,count($d)-1)]."\n";

/*
    O cia praeito, atsitiktines slamstakalbes sakinio generatoriaus pratesimas, t.y. brutalios jegos algoritmas (bruteforce algorithm)
    https://en.wikipedia.org/wiki/Proof_by_exhaustion
    t.y. matematinis visu galimu tam tikro dalyko kombinaciju irodymas, visus juos uzrastant 
*/
$iTotal = 0;

for($iA=0;$iA<count($a);$iA++){

    for($iB=0;$iB<count($b);$iB++){
    
        for($iC=0;$iC<count($c);$iC++){
        
            for($iD=0;$iD<count($d);$iD++){
            
                echo $a[$iA].' '.$b[$iB].' '.$c[$iC].' '.$d[$iD]; $iTotal++; // cia spausdinimui nauja eilute reikalinga nebent tik atvaizdavimui narsykleje
            
            }
        
        }
    
    }

}
echo 'Kombinacijos: '.$iTotal."\n"; // eilute tik tiems kas nesinaudoja unix-like sistema, kad padarytu 'php index.php | wc -l'

// unixinej sistemoj sia programa galima naudoti tiesiog taip 'php index.php > galimos_kombinacijos.txt'
