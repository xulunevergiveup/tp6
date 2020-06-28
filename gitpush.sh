#########################################################################
# File Name: gitpush.sh
# Author: xulu
# mail: xulunevergiveup@qq.com
# Created Time: 2020年06月28日 星期日 21时58分00秒
#########################################################################
#!/bin/bash

if [ $# -eq 0 ]
then
    pushmessage=`date +%Y-%m-%d`
else
    pushmessage="$*"
fi

#pushmessage=`date +%Y-%m-%d`

echo ${pushmessage}

git add -A
git commit -m "${pushmessage}"
git push origin master