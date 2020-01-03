// --- Directions
// Write a function that accepts a string.  The function should
// capitalize the first letter of each word in the string then
// return the capitalized string.
// --- Examples
//   capitalize('a short sentence') --> 'A Short Sentence'
//   capitalize('a lazy fox') --> 'A Lazy Fox'
//   capitalize('look, it is working!') --> 'Look, It Is Working!'

function capitalize1(str) {
	return str
		.split(' ')
		.map(word => {

			const otherLetters = word.slice(1);
			const firstLetter = word[0].toUpperCase();

			return firstLetter + otherLetters;
		})
		.join(' ');
}

function capitalize(str) {
	return str
		.split(' ')
		.reduce((accumulator, current) => {

			const otherLetters = current.slice(1);
			const firstLetter = current[0].toUpperCase();

			return accumulator + ' '+ firstLetter + otherLetters;
		});
}

// console.log(capitalize("How are you there?"))
// capitalize(capitalize("How are you there?"))

module.exports = capitalize;
