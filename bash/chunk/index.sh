#!/usr/local/bin/bash

# --- Directions
# Given an array and chunk size, divide the array into many subarrays
# where each subarray is of length size
# --- Examples
# chunk(2 (1 2 3 4)) --> (1 2) (3 4)
# chunk(2 (1 2 3 4 5)) --> (1 2) (3 4) (5)
# chunk(3 (1 2 3 4 5 6 7 8)) --> (1 2 3) (4 5 6) (7 8)
# chunk(4 (1 2 3 4 5)) --> (1 2 3 4) (5)
# chunk(10 (1 2 3 4 5)) --> (1 2 3 4 5)
function chunk() {
	local size=$1
	shift
	
	index=1
	length=${#@}
	((length++))

	while (( index < length )); do
		echo "("${@:index:size}")"
		((index+=size))
	done
}

#x=(1 2 3 4 5 6 7 8 9 10)
#echo `chunk 2 ${x[@]}`