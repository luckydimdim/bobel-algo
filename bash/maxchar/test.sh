#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_max_char_exists() {
	result=$(LC_ALL=C type -t max_char)
	
	if [ $result = "function" ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_max_char_finds_the_most_frequently_used_char() {
	if [ `max_char a` = 'a' ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi

	if [ `max_char abcdefghijklmnaaaaa` = 'a' ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi	
}

function test_max_char_works_with_numbers_in_the_string() {
	if [[ `max_char ab1c1d1e1f1g1` = '1' ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_max_char_exists
test_max_char_finds_the_most_frequently_used_char
test_max_char_works_with_numbers_in_the_string