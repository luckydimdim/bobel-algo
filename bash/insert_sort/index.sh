#!/bin/bash

function insert_sort() {
	input=("$@")
	length=${#input[@]}

	for((i=1;i<$length;++i)); do
		j=i
		while [[ $j -gt 0 && ${input[j-1]} -gt ${input[j]} ]]; do
			temp=${input[j-1]}
			input[j-1]=${input[j]}
			input[j]=$temp
			j=$((j-1))
		done
	done

	result=""

	for element in "${input[@]}"; do
		result=$result$element
	done

	echo $result
}

#x=(5 3 1 4 2)
#insert_sort "${x[@]}"