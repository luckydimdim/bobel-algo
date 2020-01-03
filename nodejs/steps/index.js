// --- Directions
// Write a function that accepts a positive number N.
// The function should console log a step shape
// with N levels using the # character.  Make sure the
// step has spaces on the right hand side!
// --- Examples
//   steps(2)
//       '# '
//       '##'
//   steps(3)
//       '#  '
//       '## '
//       '###'
//   steps(4)
//       '#   '
//       '##  '
//       '### '
//       '####'

function steps1(n) {
	let result = '';

	for (let index = 0; index < n; ++index) {
		result = '#'.repeat(index + 1);
		result += ' '.repeat(n - index - 1);
		console.log(result)
	}
}

function oneStep(current, total) {
	if (current > total) {
		return;
	}

	console.log('#'.repeat(current) + ' '.repeat(total - current));
	oneStep(current + 1, total);
}

function steps(n) {
	oneStep(1, n);
}

steps(4);

module.exports = steps;
