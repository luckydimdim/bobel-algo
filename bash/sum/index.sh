#!/usr/local/bin/bash

# Implement function which can sum
# 2 strings: '111' + '222' = '333'

# Joins array to string: (a b c) => abc
function join_by() {
    local IFS=$1
    shift
    echo $*
}

# Reverses string like that: abc => cba
function reverse_string() {
    local result=''

    for (( i = 0; i < ${#1}; ++i )); do
        result=${1:i:1}$result
    done

    echo $result
}

# Summarizes strings: 11 and 9 => 20
function sum() {
    # Create reversed strings from arguments
    local first=`reverse_string $1`
    local second=`reverse_string $2`

    local i=0
    local j=0

    local amount=0
    local memory=0
    local result=()

    # Main loop
    while (( i < ${#first} && j < ${#second} )); do
        amount=$((${first:i:1} + ${second:j:1}))

        if [[ $amount -ge 10 ]]; then
            amount=$(($amount - 10))
            memory=1
        else
            amount=$(($amount + $memory))
            memory=0
        fi

        result+=($amount)

        i=$(($i + 1))
        j=$(($j + 1))
    done

    # Loop for tail of first array
    while (( i < ${#first} )); do
        amount=$((${first:i:1} + $memory))
        memory=0

        result+=($amount)

        i=$(($i + 1))
    done

    # Loop for tail of second array
    while (( j < ${#second} )); do
        amount=$((${second:i:1} + $memory))
        memory=0

        result+=($amount)

        j=$(($j + 1))
    done

    # Implode result array
    result=`join_by '' ${result[@]}`

    # Reverse result string
    result=`reverse_string $result`

    echo $result
}

# echo `sum '111111111111111111111' '222'`
# echo `sum '11' '9'`
