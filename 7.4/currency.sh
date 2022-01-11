lynx -source https://rekvizitai.vz.lt/valiutu-kursai/ > cur_valiutos.html


egrep "curRates\['[A-Z]{2,3}'\] = [0-9]{1,2}\.[0-9]{10}" cur_valiutos.html > temp_cur_valiutos.list
