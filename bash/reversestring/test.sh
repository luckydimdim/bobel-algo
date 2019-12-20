#!/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

test_reverse_exists () {
	result=$(LC_ALL=C type -t reverse)
	
	if [ $result = "function" ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_reverses_a_string () {
	actual=$(reverse 'abcd')
	expected='dcba'

	if [ $actual = $expected ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_reverses_a_string_with_whitespaces () {
	actual=$(reverse '  abcd')
	expected='dcba  '

	if [ $actual = $expected ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_reverse_exists
test_function_reverses_a_string
test_function_reverses_a_string_with_whitespaces
