#!/bin/bash

function bubble_sort() {
	input=("$@")
	length=${#input[@]}

	for((i=0;i<length;++i)); do
		for((j=0;j<length;++j)); do
			if [ ${input[@]:i:1} -lt ${input[@]:j:1} ]; then
				temp=${input[@]:i:1}
				input[i]=${input[@]:j:1}
				input[j]=$temp
			fi
		done
	done

	result=""

	for element in "${input[@]}"; do
		result=$result$element
	done

	echo $result
}

#if [ $# -eq 0 ]; then
#	echo "Error"
#	exit 1
#fi

#x=(5 3 1 4 2)
#bubble_sort "${x[@]}"