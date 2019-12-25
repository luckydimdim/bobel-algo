#!/usr/local/bin/bash

function filter() {
	f="$1"; shift

	for e in "$@"; do
		if $f "$e"; then
			echo -n "$e "
		fi
	done
}

function quick_sort() {
	if [ $# -gt 1 ]; then
		p="$1"; shift
		quick_sort $(filter "test $p -lt" "$@")
		echo -n "$p "
		quick_sort $(filter "test $p -ge" "$@")
	elif [ $# -eq 1 ]; then
		echo -n "$1 "
	fi
}

#quick_sort 10 3 5 2 20
