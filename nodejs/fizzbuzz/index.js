// --- Directions
// Write a program that console logs the numbers
// from 1 to n. But for multiples of three print
// “fizz” instead of the number and for the multiples
// of five print “buzz”. For numbers which are multiples
// of both three and five print “fizzbuzz”.
// --- Example
//   fizzBuzz(5);
//   1
//   2
//   fizz
//   4
//   buzz

function fizzBuzz(n) {
	let result = n;

	for (let digit = 1; digit <= n; ++digit) {
		result = '';

		if (digit % 3 === 0) {
			result = 'fizz';
		}

		if (digit % 5 === 0) {
			result += 'buzz';
		}

		if (!result) {
			result = digit;
		}

		console.log(result);
	}
}

module.exports = fizzBuzz;
