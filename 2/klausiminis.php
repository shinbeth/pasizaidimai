<?php

// Kokie galimi alternatyvus paties php sprendimai, nenaudojant isoriniu unix-like irankiu ? 

// senas listas issaugomas atskirai palyginimams
exec('/usr/bin/cp local.list local.list.old');

// naujas ir senas listai sulyginami
exec("/usr/bin/diff local.list local.list.old | /usr/bin/grep https | /usr/bin/grep '<'",$news);

// naujas listas isrusiuojamas abeceles tvarka ir panaikinami pasikartojimai
exec('/usr/bin/sort local.list | /usr/bin/uniq');


?>

