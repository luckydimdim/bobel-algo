#!/bin/bash

function choice_sort() {
	input=("$@")
	length=${#input[@]}

	for((i=0;i<$((length-1));++i)); do
		for((j=$((i+1));j<$length;++j)); do
			if [[ ${input[j]} -lt ${input[i]} ]]; then
				temp=${input[j]}
				input[j]=${input[i]}
				input[i]=$temp
			fi
		done
	done

	result=""

	for element in "${input[@]}"; do
		result=$result$element
	done

	echo $result
}

if [ $# -eq 0 ]; then
	echo "Error"
	exit 1
fi

#x=(5 3 1 4 2)
choice_sort "${x[@]}"