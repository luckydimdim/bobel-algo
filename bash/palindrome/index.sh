#!/bin/bash

palindrome () {
	length=${#1}
	reverted=""

	for((i=0;i<length;++i)); do 
		reverted="${1:$i:1}$reverted"; 
	done

	result=False

	if [[ "$reverted" == "$1" ]]; then
		result=True
	fi

	echo $result
}

if [ $# -ne 1 ]; then
	echo "Error"
	exit 1
fi