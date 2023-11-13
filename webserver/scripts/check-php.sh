#!/bin/bash
set -euo pipefail

# If php-fpm worker processes have been running for more than 10 minutes, restart the service.

COUNT=$(ps -eo etimes,pid,lstart,etime,args --sort -etimes \
    | grep "php-fpm: pool www" \
    | awk '{if ($1 > 10*60) print $0 }' \
    | wc -l)
    
if [ "$COUNT" -gt 0 ]; then
    service php5.6-fpm restart
else
    echo "All fine, hopefully."
fi