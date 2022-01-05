#!/bin/bash
#

KOMENTARAS=$(/usr/bin/date +"'scriptSync%Y%m%d%H%M%S'")

/usr/bin/git add --all ./* \
&& /usr/bin/git commit -m $(echo $KOMENTARAS) \
&& /usr/bin/git push;
