#!/usr/local/bin/bash

DIR="${BASH_SOURCE%/*}"
. "$DIR/index.sh"

function test_anagrams_exists() {
	result=$(LC_ALL=C type -t anagrams)
	
	if [ $result = "function" ]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_hello_is_an_anagram_of_llohe() {
	actual=`anagrams "hello" "llohe"`

	if [[ $actual == true ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_whoa_hi_is_an_anagram_of_hi_whoa() {
	actual=`anagrams "Whoa! Hi!" "Hi! Whoa!"`

	if [[ $actual == true ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_one_one_is_not_an_anagram_of_two_two_two() {
	actual=`anagrams "One One" "Two two two"`

	if [[ $actual == false ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_one_one_is_not_an_anagram_of_one_one_c() {
	actual=`anagrams "One one" "One one c"`

	if [[ $actual == false ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

function test_a_tree_a_life_a_bench_is_not_an_anagram_of_a_tree_a_fence_a_yard() {
	actual=`anagrams "A tree, a life, a bench" "A tree, a fence, a yard"`

	if [[ $actual == false ]]; then
		echo "${FUNCNAME[0]} True"
	else
		echo "${FUNCNAME[0]} False"
	fi
}

test_anagrams_exists
test_hello_is_an_anagram_of_llohe
test_whoa_hi_is_an_anagram_of_hi_whoa
test_one_one_is_not_an_anagram_of_two_two_two
test_one_one_is_not_an_anagram_of_one_one_c
test_a_tree_a_life_a_bench_is_not_an_anagram_of_a_tree_a_fence_a_yard