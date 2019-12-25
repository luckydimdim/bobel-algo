#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_merge_sort_exists() {
	result=$(LC_ALL=C type -t merge_sort)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_merge_sort_arranges_unsorted_array() {
	x=(10 9 8 4 5 6 7 3 2 1)
	actual=$(merge_sort 10 ${x[@]})
	expected="1 2 3 4 5 6 7 8 9 10"

	if [[ $actual == $expected ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_merge_sort_arranges_sorted_array() {
	x=(1 2 3 4 5 6 7 8 9 10)
	actual=$(merge_sort 10 ${x[@]})
	expected="1 2 3 4 5 6 7 8 9 10"

	if [[ $actual == $expected ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_merge_sort_exists
test_merge_sort_arranges_unsorted_array
test_merge_sort_arranges_sorted_array
