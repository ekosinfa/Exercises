#!/bin/bash  

find . -name "*.php" -print0 | xargs -0 -n1 -P8 php -l

if ['$?' == 0]
then 
  phpunit
  return $?
else
  return 1
fi
