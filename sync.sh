#!/bin/bash
KOMENTARAS = $(/usr/bin/date --rfc-3339=seconds)

/usr/bin/git add --all ./* \
&& /usr/bin/git commit -m $'KOMENTARAS' \
&& /usr/bin/git push;
