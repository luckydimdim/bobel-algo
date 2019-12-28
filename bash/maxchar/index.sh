#!/usr/local/bin/bash

# --- Directions
# Given a string, return the character that is most
# commonly used in the string.
# --- Examples
# maxChar("abcccccccd") === "c"
# maxChar("apple 1231111") === "1"

function max_char() {
	declare -A char_map

	#if [[ ${char_map[aaa]} == "" ]]; then
		#echo 111;
	#fi

	#echo ${char_map[aaa]}

	for (( i = 0; i < ${#1}; ++i )); do
		if [[ ${char_map[${1:i:1}]} = '' ]]; then
			char_map[${1:i:1}]=1
		else
			((char_map[${1:i:1}]+=1))
		fi
	done

	max_letter=''
	max_letter_rate=0

	for letter in "${!char_map[@]}"; do
		if [[ ${char_map[$letter]} > $max_letter_rate ]]; then
			max_letter=$letter
			max_letter_rate=${char_map[$letter]}
		fi
	done

	#declare -p char_map

	echo $max_letter;
}

#echo `max_char abcccccccd`;