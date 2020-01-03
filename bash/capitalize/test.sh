#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_function_exists() {
	result=$(LC_ALL=C type -t capitalize)
	
	if [ $result = "function" ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_capitalizes_the_first_letter_of_every_word_in_a_sentence() {
	expected="Hi There, How Is It Going?"
	actual=`capitalize "hi there, how is it going?"`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_capitalizes_the_first_letter() {
	expected="I Love Breakfast At Bill Miller Bbq"
	actual=`capitalize "i love breakfast at bill miller bbq"`
	
	if [[ $expected == $actual ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_function_exists
test_capitalizes_the_first_letter_of_every_word_in_a_sentence
test_capitalizes_the_first_letter