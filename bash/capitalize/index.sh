#!/usr/local/bin/bash

# --- Directions
# Write a function that accepts a string.  The function should
# capitalize the first letter of each word in the string then
# return the capitalized string.
# --- Examples
#   capitalize "a short sentence" --> 'A Short Sentence'
#   capitalize "a lazy fox" --> 'A Lazy Fox'
#   capitalize "look, it is working!" --> 'Look, It Is Working!'
function capitalize() {
	result=${1:0:1}
	result=${result^}

	for (( index = 1; index < ${#1}; ++index )) {
		letter=${1:index:1}

		if [[ ${1:index-1:1} == " " ]]; then
			letter=${letter^}
		fi 

		result=$result$letter
	}

	echo $result
}

echo `capitalize "look, it is working!"`