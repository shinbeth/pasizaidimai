#!/bin/bash
#

KOMENTARAS=$(/usr/bin/date +"'script_sync_%Y_%m_%d_%H%M%S'")

/usr/bin/git add --all ./* \
&& /usr/bin/git commit -m $(echo $KOMENTARAS) \
&& /usr/bin/git push;
