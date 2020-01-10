#!/usr/local/bin/bash

# --- Directions
# Write a function that accepts an integer N
# and returns a NxN spiral matrix.
# --- Examples
#   matrix 2
#     [[1, 2],
#     [ 4, 3]]
#   matrix 3
#     [[1, 2, 3],
#     [8,  9, 4],
#     [7,  6, 5]]
#  matrix 4
#     [[1,  2,  3, 4],
#     [12, 13, 14, 5],
#     [11, 16, 15, 6],
#     [10,  9,  8, 7]]

function matrix() {
    local size=$1
    spiral=()

    for (( i = 0; i < $size; ++i )); do
        inner=()

        for (( j = 0; j < $size; ++j )); do
            inner[$j]=0
        done

        spiral[$i]=${inner[@]}
    done

    # declare -p spiral

    counter=1
    start_column=0
    end_column=$((size-1))
    start_row=0
    end_row=$((size-1))

    while (( start_column <= end_column && start_row <= end_row )); do
        for (( i = $start_column; i <= $end_column; ++i )); do
            list=(${spiral[start_row]})
            list[$i]=$counter
            spiral[$start_row]=${list[@]}
            ((counter++))
        done          

        ((start_row++))

        for (( i = $start_row; i <= $end_row; ++i )); do
            list=(${spiral[i]})
            list[$end_column]=$counter
            spiral[$i]=${list[@]}
            ((counter++))            
        done

        ((end_column--))    

        for (( i = $end_column; i >= $start_column; --i )); do
            list=(${spiral[end_row]})

            list[$i]=$counter
            spiral[$end_row]=${list[@]}
            ((counter++))
        done    

        ((end_row--))    

        for (( i = $end_row; i >= $start_row; --i )); do
            list=(${spiral[i]})

            list[$start_column]=$counter
            spiral[$i]=${list[@]}
            ((counter++))
        done        

        ((start_column++))       
    done

    for (( row = 0; row < $size; ++row )); do
        echo "["${spiral[row]}"]"
    done
}

# echo `matrix 4`


