#!/usr/local/bin/bash

function merge() {
	local first=2
	local second=$(( $1 + 2 ))

	for i in ${@:2}
	do
		if [[ $first -eq $(( $1 + 2 )) ]]
		then
			echo ${@:$second:1} ; ((second += 1))
		else
			if [[ $second -eq $(( ${#@} + 1 )) ]]
			then
				echo ${@:$first:1} ; ((first += 1))
			else
				if [[ ${@:$first:1} -lt ${@:$second:1} ]]
				then
					echo ${@:$first:1} ; ((first += 1))
				else
					echo ${@:$second:1} ; ((second += 1))
				fi
			fi
		fi
	done
}

function merge_sort() {
	if [[ $1 -ge 2 ]]
	then
		local med=$(( $1 / 2 ))
		local first=( $(merge_sort $med ${@:2:$med}) )
		local second=( $(merge_sort $(( $1 - $med )) ${@:$(( $med + 2 )):$(( $1 - $med ))}) )
		echo $(merge $med ${first[@]} ${second[@]})
	else
		echo $2
	fi
}

#a=(10 9 8 4 5 6 7 3 2 1)
#echo $(merge_sort 10 ${a[@]})