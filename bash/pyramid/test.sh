#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_function_exists() {
	result=$(LC_ALL=C type -t pyramid)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_pyramid_called_with_n_2() {
	expected=`echo -e " # \n###"`
	actual="`pyramid 2`"
	
	if [[ "$expected" == "$actual" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_pyramid_called_with_n_3() {
	expected=`echo -e "  #  \n ### \n#####"`
	actual="`pyramid 3`"
	
	if [[ "$expected" == "$actual" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_pyramid_called_with_n_4() {
	expected=`echo -e "   #   \n  ###  \n ##### \n#######"`
	actual="`pyramid 4`"
	
	if [[ "$expected" == "$actual" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}


test_function_exists
test_pyramid_called_with_n_2
test_pyramid_called_with_n_3
test_pyramid_called_with_n_4
