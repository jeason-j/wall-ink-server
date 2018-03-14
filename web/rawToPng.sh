#!/bin/bash

png="$1"
png+=".png"
pbm="$1"
pbm+=".pbm"
echo "P4" > $pbm
echo "#Image generated by script" >> $pbm
echo "$2 $3" >> $pbm
cat $1 >> $pbm
convert -negate $pbm $png
