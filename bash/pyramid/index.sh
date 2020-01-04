#!/usr/local/bin/bash

# --- Directions
# Write a function that accepts a positive number N.
# The function should console log a pyramid shape
# with N levels using the # character.  Make sure the
# pyramid has spaces on both the left *and* right hand sides
# --- Examples
#   pyramid 1
#       '#'
#   pyramid 2
#       ' # '
#       '###'
#   pyramid 3
#       '  #  '
#       ' ### '
#       '#####'

function pyramid() {
	local rows=$1
	local row=$2
	local stage=$3
	local width=$((rows*2-1))
	local center=$((rows-1))

	if [[ -z $row ]]; then
		row=0
	fi

	if [[ -z $stage ]]; then
		stage=""
	fi

	if [[ $rows -eq $row ]]; then
		return
	fi

	if [[ ${#stage} -eq $width ]]; then
		echo "$stage"
		pyramid $rows $((row+1))
		return
	fi

	if [[ ${#stage} -lt $((center-row)) || ${#stage} -gt $((center+row)) ]]; then
		stage="$stage "
	else
		stage=$stage#
	fi



	pyramid $rows $row "$stage"
}

echo "`pyramid 5`"