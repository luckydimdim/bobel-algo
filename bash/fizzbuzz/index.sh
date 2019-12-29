#!/usr/local/bin/bash

# --- Directions
# Write a program that console logs the numbers
# from 1 to n. But for multiples of three print
# "fizz" instead of the number and for the multiples
# of five print "buzz". For numbers which are multiples
# of both three and five print "fizzbuzz".
# --- Example
#   fizz_buzz 5
#   1
#   2
#   fizz
#   4
#   buzz
function fizz_buzz() {
	result=()

	for (( i = 1; i <= $1; ++i )); do
		current=""

		if [[ $((i % 3)) == 0 ]]; then
			current="fizz"
		fi

		if [[ $((i % 5)) == 0 ]]; then
			current=$current"buzz"			
		fi

		if [[ $current == "" ]]; then
			current=$i
		fi

		result+=($current)
	done
	
	echo ${result[@]}
}

#echo `fizz_buzz 5`