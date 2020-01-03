#!/usr/local/bin/bash

# --- Directions
# Write a function that accepts a positive number N.
# The function should console log a step shape
# with N levels using the # character.  Make sure the
# step has spaces on the right hand side!
# --- Examples
#   steps 2
#       '# '
#       '##'
#   steps 3
#       '#  '
#       '## '
#       '###'
#   steps 4
#       '#   '
#       '##  '
#       '### '
#       '####'

function steps() {
	local rows=$1
	local current=$2
	local stage=$3

	#echo rows:$rows
	#echo current:$current
	#echo stage:$stage	

	if [[ -z $current ]]; then
		current=0
	fi

	if [[ -z $stage ]]; then
		stage=""
	fi

	if [[ $current -ge $rows ]]; then
		return
	fi

	if [[ ${#stage} -eq $rows ]]; then
		echo "$stage"
		((current+=1))
		steps $rows $current
		return
	fi

	if [[ ${#stage} -le $current ]]; then
		stage=$stage#
	else
		stage="$stage "
	fi
	
	steps $rows $current "$stage"
}

#echo "`steps 4`"
