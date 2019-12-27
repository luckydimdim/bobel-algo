#!/usr/local/bin/bash

# --- Directions
# 	Given an integer, return an integer that is the reverse
# 	ordering of numbers.
# --- Examples
# 	reverse_int(15   == 51
#   reverse_int(981) == 189
# 	reverse_int(500) == 5
# 	reverse_int(-15) == -51
# 	reverse_int(-90) == -9
function reverse_int() {
	reversed=""

	for (( i = 0; i < ${#1}; i++ )); do
		if [[ ${1:i:1} == "-" ]]; then
			continue
		fi

		reversed=${1:i:1}$reversed
	done

	result=`expr $reversed + 0`

	if [[ $1 -lt 0 ]]; then
		result=$((result*-1))
	fi

	echo $result
}

# echo `reverse_int -15`