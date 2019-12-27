#!/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_reverse_int_exists() {
	result=$(LC_ALL=C type -t reverse_int)
	
	if [ $result = "function" ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_reverse_int_handles_0_as_an_input() {
	actual=`reverse_int 0`
	expected=0

	if [ $actual = $expected ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_reverse_int_flips_a_positive_number() {
	if [ `reverse_int 5` = 5 ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi

	if [ `reverse_int 15` = 51 ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi	

	if [ `reverse_int 90` = 9 ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi	

	if [ `reverse_int 2359` = 9532 ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi	
}

function test_reverse_int_flips_a_negative_number() {
	if [ `reverse_int -5` = -5 ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi

	if [ `reverse_int -15` = -51 ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi	

	if [ `reverse_int -90` = -9 ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi	

	if [ `reverse_int -2359` = -9532 ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi	
}

test_reverse_int_exists
test_reverse_int_handles_0_as_an_input
test_reverse_int_flips_a_positive_number
test_reverse_int_flips_a_negative_number
