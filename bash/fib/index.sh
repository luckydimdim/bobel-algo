#!/usr/local/bin/bash

# --- Directions
# Print out the n-th entry in the fibonacci series.
# The fibonacci series is an ordering of numbers where
# each number is the sum of the preceeding two.
# For example, the sequence
#  [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
# forms the first ten entries of the fibonacci series.
# Example:
#   fib 4  == 3

function fib() {
    local n=$1
    local result=(0 1)

    for (( i = 2; i <= $n; ++i )); do
        first=${result[@]:i-1:1}
        second=${result[@]:i-2:1}
        element=$((first+second))
        result+=($element)
    done

    echo ${result[@]:n:1}
}

# echo `fib 4`