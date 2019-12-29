#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_fizz_buzz_exists() {
	result=$(LC_ALL=C type -t fizz_buzz)
	
	if [ $result = "function" ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_fizz_works_properly() {
	expected="1 2 fizz 4 buzz"
	actual=`fizz_buzz 5`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_fizz_buzz_exists
test_fizz_works_properly