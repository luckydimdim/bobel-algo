#!/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

test_palindrome_exists () {
	result=$(LC_ALL=C type -t palindrome)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_palindrome_works () {
	actual=$(palindrome 'abcba')
	expected=True

	if [[ $actual == $expected ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_palindrome_not_works () {
	actual=$(palindrome '  abcd')
	expected=False

	if [[ $actual == $expected ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_palindrome_exists
test_function_palindrome_works
test_function_palindrome_not_works
