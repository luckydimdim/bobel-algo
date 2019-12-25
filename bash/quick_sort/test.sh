#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_quick_sort_exists() {
	result=$(LC_ALL=C type -t quick_sort)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_quick_sort_arranges_unsorted_array() {
	actual=$(quick_sort 5 3 1 4 2)
	expected="5 4 3 2 1 "

	if [[ $actual == $expected ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_quick_sort_arranges_sorted_array() {
	actual=$(quick_sort 5 4 3 2 1)
	expected="5 4 3 2 1 "

	if [[ $actual == $expected ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_quick_sort_exists
test_quick_sort_arranges_unsorted_array
test_quick_sort_arranges_sorted_array
