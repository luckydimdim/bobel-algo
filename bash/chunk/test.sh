#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_chunk_exists() {
	result=$(LC_ALL=C type -t chunk)
	
	if [[ $result == "function" ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_chunk_divides_an_array_of_10_elements_with_chunk_size_2() {
	x=(1 2 3 4 5 6 7 8 9 10)
	actual=`chunk 2 ${x[@]}`
	expected="(1 2) (3 4) (5 6) (7 8) (9 10)"

	a=`echo $actual`
	b=`echo $expected`

	if [[ $a == $b ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_chunk_divides_an_array_of_3_elements_with_chunk_size_1() {
	x=(1 2 3)
	actual=`chunk 1 ${x[@]}`
	expected="(1) (2) (3)"

	a=`echo $actual`
	b=`echo $expected`

	if [[ $a == $b ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi	
}

function test_chunk_divides_an_array_of_5_elements_with_chunk_size_3() {
	x=(1 2 3 4 5)
	actual=`chunk 3 ${x[@]}`
	expected="(1 2 3) (4 5)"

	a=`echo $actual`
	b=`echo $expected`

	if [[ $a == $b ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_chunk_divides_an_array_of_13_elements_with_chunk_size_5() {
	x=(1 2 3 4 5 6 7 8 9 10 11 12 13)
	actual=`chunk 5 ${x[@]}`
	expected="(1 2 3 4 5) (6 7 8 9 10) (11 12 13)"

	a=`echo $actual`
	b=`echo $expected`

	if [[ $a == $b ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_chunk_exists
test_chunk_divides_an_array_of_10_elements_with_chunk_size_2
test_chunk_divides_an_array_of_3_elements_with_chunk_size_1
test_chunk_divides_an_array_of_5_elements_with_chunk_size_3
test_chunk_divides_an_array_of_13_elements_with_chunk_size_5

