#!/bin/bash

# --- Directions
# Given a string, return a new string with the reversed
# order of characters
# --- Examples
#   reverse('apple') === 'leppa'
#   reverse('hello') === 'olleh'
#   reverse('Greetings!') === '!sgniteerG'
reverse () {
	# echo $1|rev
	length=${#1}
	result=""

	for((i=$length-1;i>=0;i--)); do 
		result="$result${1:$i:1}"; 
	done

	echo $result
}

if [ $# -ne 1 ]; then
	echo "Usage: $0 apple prints 'elppa'"
	exit 1
fi

reverse $1

#exit 0
