#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_function_exists() {
	result=$(LC_ALL=C type -t steps)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_steps_called_with_n_1() {
	expected="#"
	actual=`steps 1`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_steps_called_with_n_2() {
	expected=`echo -e "# \n##"`
	actual="`steps 2`"
	
	if [[ "$expected" == "$actual" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_steps_called_with_n_3() {
	expected=`echo -e "#  \n## \n###"`
	actual="`steps 3`"

	if [[ "$expected" == "$actual" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_exists
test_steps_called_with_n_1
test_steps_called_with_n_2
test_steps_called_with_n_3