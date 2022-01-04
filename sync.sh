#!/bin/bash
#

# Neismasciau kaip i kabutes iterpt ;/
#KOMENTARAS=$(/usr/bin/date --rfc-3339=seconds)

/usr/bin/git add --all ./* \
&& /usr/bin/git commit -m 'comm' \
&& /usr/bin/git push;
