#!/bin/bash
#

KOMENTARAS=$(/usr/bin/date +"'script_Sync_%Y%m%d%H%M%S'")

/usr/bin/git add --all ./* \
&& /usr/bin/git commit -m $(echo $KOMENTARAS) \
&& /usr/bin/git push;
