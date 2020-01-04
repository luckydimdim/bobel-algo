// --- Directions
// Write a function that accepts a positive number N.
// The function should console log a pyramid shape
// with N levels using the # character.  Make sure the
// pyramid has spaces on both the left *and* right hand sides
// --- Examples
//   pyramid(1)
//       '#'
//   pyramid(2)
//       ' # '
//       '###'
//   pyramid(3)
//       '  #  '
//       ' ### '
//       '#####'

function pyramid(n) {
	const canvasWidth = n * 2 - 1;
	const center = n

	for (let row = 0; row < n; ++row) {
		let result = '';

		for (let col = 0; col < canvasWidth; ++col) {
			if (col < center - row - 1 || col > center + row - 1) {
				result += ' ';
			} else {
				result += '#';
			}
		}

		console.log(result);
	}
}

// pyramid(5);

module.exports = pyramid;
