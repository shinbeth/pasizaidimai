#!/bin/bash
#

KOMENTARAS=$(/usr/bin/date +"%m-%d-%Y")

/usr/bin/git add --all ./* \
&& /usr/bin/git commit -m $(echo ' $KOMENTARAS ') \
&& /usr/bin/git push;
