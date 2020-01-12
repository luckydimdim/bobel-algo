#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_function_exists() {
	result=$(LC_ALL=C type -t fib)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_calculates_correct_fib_value_for_1() {
	expected=1
	actual=`fib 1`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_calculates_correct_fib_value_for_2() {
	expected=1
	actual=`fib 2`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_calculates_correct_fib_value_for_3() {
	expected=2
	actual=`fib 3`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_calculates_correct_fib_value_for_4() {
	expected=3
	actual=`fib 4`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_calculates_correct_fib_value_for_39() {
	expected=63245986
	actual=`fib 39`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_exists
test_calculates_correct_fib_value_for_1
test_calculates_correct_fib_value_for_2
test_calculates_correct_fib_value_for_3
test_calculates_correct_fib_value_for_4
test_calculates_correct_fib_value_for_39