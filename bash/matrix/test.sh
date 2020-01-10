#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_function_exists() {
	result=$(LC_ALL=C type -t matrix)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_matrix_produces_a_2x2_array() {
	expected=`echo -e "[1 2]\n[4 3]"`
	actual=`matrix 2`

	if [[ "$expected" == "$actual" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_matrix_produces_a_3x3_array() {
	expected=`echo -e "[1 2 3]\n[8 9 4]\n[7 6 5]"`
	actual=`matrix 3`
	
	if [[ "$expected" == "$actual" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_matrix_produces_a_4x4_array() {
	expected=`echo -e "[1 2 3 4]\n[12 13 14 5]\n[11 16 15 6]\n[10 9 8 7]"`
	actual=`matrix 4`
	
	if [[ "$expected" == "$actual" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_exists
test_matrix_produces_a_2x2_array
test_matrix_produces_a_3x3_array
test_matrix_produces_a_4x4_array
