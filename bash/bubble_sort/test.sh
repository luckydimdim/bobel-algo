#!/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_bubble_sort_exists() {
	result=$(LC_ALL=C type -t bubble_sort)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_bubble_sort_arranges_unsorted_array() {
	x=(5 3 1 4 2)
	actual=$(bubble_sort "${x[@]}")
	expected="12345"

	if [[ $actual == $expected ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_bubble_sort_arranges_sorted_array() {
	x=(1 2 3 4 5)
	actual=$(bubble_sort "${x[@]}")
	expected="12345"

	if [[ $actual == $expected ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_bubble_sort_exists
test_bubble_sort_arranges_unsorted_array
test_bubble_sort_arranges_sorted_array
