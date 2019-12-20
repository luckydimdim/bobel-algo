// --- Directions
// Given a string, return a new string with the reversed
// order of characters
// --- Examples
//   reverse('apple') === 'leppa'
//   reverse('hello') === 'olleh'
//   reverse('Greetings!') === '!sgniteerG'
function reverse(str) {
	if (!str) {
		return false;
	}

	// debugger;
	// node inspect index.js 
	// c, continue
	// repl, str, ctrl+c, c

	// 1. return str.split('').reverse().join('');

	// 2. return str.split('').reduce((result, char) => char + result, '');

	let result = '';

	for (let character of str) {
		result = character + result;
	}

	return result;
}

module.exports = reverse;
