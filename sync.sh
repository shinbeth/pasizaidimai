KOMENTARAS = $(date --rfc-3339=seconds)

git add --all ./* && git commit -m '$KOMENTARAS' && git push;
