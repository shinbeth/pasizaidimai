/usr/bin/lynx -source https://rekvizitai.vz.lt/valiutu-kursai/ | /usr/bin/egrep "curRates\['[A-Z]{2,3}'\] = [0-9]{1,2}\.[0-9]{10}" > temp_cur_valiutos.list
