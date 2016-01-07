#!/bin/bash

LOWERCASE_ISO=$1
UPPERCASE_ISO=${1^}

find . -type f ! -iname "*.sh"  -print0 | xargs -0 sed -i "s/###Iso###/$UPPERCASE_ISO/g"
find . -type f ! -iname "*.sh"  -print0 | xargs -0 sed -i "s/###iso###/$LOWERCASE_ISO/g"