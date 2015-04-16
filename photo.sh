#!/bin/bash

DATE=$(date +"%Y-%m-%d_%H%M")

raspistill -q 10 -vf -hf -a a$DATE -o /var/www/$DATE.jpg
cd /home/pi/copy/armv6h
./CopyCmd Cloud -username= -password='' put /var/www/$DATE.jpg /: