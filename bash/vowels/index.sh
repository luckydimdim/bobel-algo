#!/usr/local/bin/bash

# --- Directions
# Write a function that returns the number of vowels
# used in a string.  Vowels are the characters 'a', 'e'
# 'i', 'o', and 'u'.
# --- Examples
#   vowels "Hi There!" --> 3
#   vowels "Why do you ask?" --> 4
#   vowels "Why?" --> 0

function vowels() {
    local result=0
    local input=$1

    for (( i = 0; i < ${#input}; ++i )); do
        local letter=${input:i:1}
        letter=${letter,,}

        if [[ $letter =~ (a|e|o|i|u) ]]; then

            ((result+=1))
        fi
    done

    echo $result
}

# echo `vowels "Why do you AskUI?"`

