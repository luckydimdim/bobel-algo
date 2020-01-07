#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_function_exists() {
	result=$(LC_ALL=C type -t vowels)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_returns_the_number_of_vowels_used_1() {
	expected=5
	actual=`vowels "aeiou"`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_returns_the_number_of_vowels_used_when_they_are_capitalized() {
	expected=5
	actual=`vowels "AEIOU"`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_returns_the_number_of_vowels_used_2() {
	expected=5
	actual=`vowels "abcdefghijklmnopqrstuvwxyz"`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_returns_the_number_of_vowels_used_3() {
	expected=0
	actual=`vowels "bcdfghjkl"`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_exists
test_returns_the_number_of_vowels_used_1
test_returns_the_number_of_vowels_used_when_they_are_capitalized
test_returns_the_number_of_vowels_used_2
test_returns_the_number_of_vowels_used_3