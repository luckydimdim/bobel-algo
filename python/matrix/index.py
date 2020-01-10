# --- Directions
# Write a function that accepts an integer N
# and returns a NxN spiral matrix.
# --- Examples
#   matrix(2)
#     [[1, 2],
#     [ 4, 3]]
#   matrix(3)
#     [[1, 2, 3],
#     [8,  9, 4],
#     [7,  6, 5]]
#  matrix(4)
#     [[1,  2,  3, 4],
#     [12, 13, 14, 5],
#     [11, 16, 15, 6],
#     [10,  9,  8, 7]]

def matrix(n):
    spiral = [];

    for i in range(n):
        spiral.append([0 for i in range(n)])

    walk(spiral)

    return spiral

def walk(spiral, row = 0, col = 0, direction = "right", counter = 1):
    size = len(spiral) * len(spiral)

    if (size + 1 == counter):
        return

    spiral[row][col] = counter

    counter += 1

    if direction == "right":
        if col + 1 >= len(spiral) or spiral[row][col + 1] != 0:
            direction = "down"
            row += 1
        else:
            direction = "right"
            col += 1
    elif direction == "down":
        if row + 1 >= len(spiral) or spiral[row + 1][col] != 0:
            direction = "left"
            col -= 1
        else:
            direction = "down"
            row += 1
    elif direction == "left":
        if col - 1 < 0 or spiral[row][col - 1] != 0:
            direction = "top"
            row -= 1
        else:
            direction = "left"
            col -= 1
    elif direction == "top":        
        if row - 1 < 0 or spiral[row - 1][col] != 0:
            direction = "right"
            col += 1
        else:
            direction = "top"
            row -= 1
    
    walk(spiral, row, col, direction, counter)

#for row in matrix(4):
#    print(row)