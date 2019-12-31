#!/usr/local/bin/bash

# --- Description
# Check to see if two provided strings are anagrams of eachother.
# One string is an anagram of another if it uses the same characters
# in the same quantity. Only consider characters, not spaces
# or punctuation. Consider capital letters to be the same as lower case
#
# --- Examples
# anagrams "rail safety" "fairy tales" --> true
# anagrams "RAIL! SAFETY!" "fairy tales" --> true
# anagrams "Hi there" "Bye there" --> false
function anagrams() {
	local a=$1
	local b=$2
	declare -A mapA
	declare -A mapB

	a=${a//[^a-zA-Z]/}
	a=${a,,}

	b=${b//[^a-zA-Z]/}
	b=${b,,}	

	for (( index = 0; index < ${#a}; ++index )); do
		letter=${a:index:1}
		
		if [[ -z ${mapA[$letter]} ]]; then
			mapA[$letter]=1
		else
			mapA[$letter]=$((mapA[$letter]+1))
		fi
	done

	for (( index = 0; index < ${#b}; ++index )); do
		letter=${b:index:1}
		
		if [[ -z ${mapB[$letter]} ]]; then
			mapB[$letter]=1
		else
			mapB[$letter]=$((mapB[$letter]+1))
		fi
	done	

	if [[ ${#mapA[@]} -ne ${#mapB[@]} ]]; then
		echo false
		return
	fi

	for letter in "${!mapA[@]}"; do
		if [[ -z ${mapB[$letter]} ]]; then
			echo false
			return
		fi

		if [[ ${mapB[$letter]} -ne ${mapA[$letter]} ]]; then
			echo false
			return
		fi
	done

	echo true
}

# echo `anagrams "a! Bc" "C! ~bA"`
