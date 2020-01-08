// --- Directions
// Write a function that accepts an integer N
// and returns a NxN spiral matrix.
// --- Examples
//   matrix(2)
//     [[1, 2],
//     [ 4, 3]]
//   matrix(3)
//     [[1, 2, 3],
//     [8,  9, 4],
//     [7,  6, 5]]
//  matrix(4)
//     [[1,  2,  3, 4],
//     [12, 13, 14, 5],
//     [11, 16, 15, 6],
//     [10,  9,  8, 7]]

function matrix(n) {
    const spiral = [];

    for (let i = 0; i < n; ++i) {
        let arr = [];

        for (let j = 0; j < n; ++j) {
            arr[j] = 0;    
        }

        spiral[i] = arr;
    }

    walk(spiral);

    return spiral;
}

function walk(spiral, x = 0, y = 0, direction = 'right', current = 1) {
    if (spiral.length*spiral.length === current - 1) {
        return;
    }

    spiral[y][x] = current;

    current += 1;    

    switch (direction) {
        case 'right':
            if (spiral[y][x+1] === undefined || spiral[y][x+1] !== 0) {
                direction = 'down';
                y++;
            } else {
                x++;
            }
            
            break;

        case 'down':
            if (spiral[y+1] === undefined || spiral[y+1][x] !== 0) {
                direction = 'left';
                x--;
            } else {
                y++;
            }
            
            break;

        case 'left':
            if (x-1 < 0 || spiral[y][x-1] === undefined || spiral[y][x-1] !== 0) {
                direction = 'top';
                y--;
            } else {
                x--;
            }
            
            break;

        case 'top':
            if (y-1 < 0 || spiral[y-1] === undefined || spiral[y-1][x] !== 0) {
                direction = 'right';
                x++;
            } else {
                y--;
            }
            
            break;
    }

    walk(spiral, x, y, direction, current);
}

/*const result = matrix(6);
for (let i of result) {
    console.log(i);
}*/

module.exports = matrix;
