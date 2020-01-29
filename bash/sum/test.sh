#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_function_exists() {
	result=$(LC_ALL=C type -t sum)

	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_simple_summarize_two_numbers() {
	expected='33'
	actual=`sum '11' '22'`

	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_summarize_very_long_number() {
	expected='111111111111111111333'
	actual=`sum '111111111111111111111' '222'`

	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_put_to_memory() {
	expected='20'
	actual=`sum '11' '9'`

	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_exists
test_simple_summarize_two_numbers
test_summarize_very_long_number
test_put_to_memory