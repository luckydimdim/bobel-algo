// --- Directions
// Print out the n-th entry in the fibonacci series.
// The fibonacci series is an ordering of numbers where
// each number is the sum of the preceeding two.
// For example, the sequence
//  [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
// forms the first ten entries of the fibonacci series.
// Example:
//   fib(4) === 3

function fib(n) {
    let current = 1;
    let first = 1;
    let second = 0;

    let step = 2;

    if (n === 0) {
        return second;
    }

    if (n === 1) {
        return first;
    }

    if (n === 2) {
        return current;
    }    

    while (step < n) {
        second = first;
        first = current;
        current = first + second;
        step++;
    }

    return current;
}

// console.log(fib(4));

module.exports = fib;
