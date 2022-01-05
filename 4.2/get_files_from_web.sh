# Copyright <2022> <Viktoras Stočkūnas viktoras@slacknet.eu>
# 
# Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
# 
# 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
# 
# 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
# 
# 3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
# 
# THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

#!/bin/bash

URL='https://github.com/EbookFoundation/free-programming-books/blob/main/books/free-programming-books-subjects.md' # nuoroda failu traukimui
FILETYPE='.pdf' # failo extensionas pagal kuri filtruos nuorodas
PLACE='files' # aplanko i kuri bus saugomi failai pavadinimas
DOWNLOAD_PROTOCOL='http' # https http ftp

#shellines narsykles panaudojimas, failu istraukimui is web serviso
#puslapio
mkdir -p $PLACE
cd $PLACE

/usr/bin/wget $(
/usr/bin/lynx  \
    --listonly \
    --nonumbers \
    --dump $URL\
     | \
/usr/bin/grep $DOWNLOAD_PROTOCOL | \
/usr/bin/grep $FILETYPE
)

cd ..
