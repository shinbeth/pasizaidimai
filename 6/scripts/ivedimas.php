<?php

$vardas = $_POST[vardas];
$pavarde = $_POST[pavarde];
$emailas = $_POST[emailas];
$firma = $_POST[firma];


echo '<b>Vardas:</b> '.$vardas.'<br>';
echo '<b>Pavarde:</b> '.$pavarde.'<br>';
echo '<b>Emailas:</b> '.$emailas.'<br>';
echo '<b>Firma:</b> '.$firma.'<br>';



$myfile = fopen("data/newfile.csv", "a") or die("Unable to open file!");



$txt = $vardas.','.$pavarde.','.$emailas.','.$firma.','."\n";

fwrite($myfile, $txt);
fclose($myfile);
