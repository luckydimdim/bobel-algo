// --- Directions
// Write a function that returns the number of vowels
// used in a string.  Vowels are the characters 'a', 'e'
// 'i', 'o', and 'u'.
// --- Examples
//   vowels('Hi There!') --> 3
//   vowels('Why do you ask?') --> 4
//   vowels('Why?') --> 0

function vowels(str) {
	result = 0;

	for (let index = 0; index < str.length; ++index) {
		if (['a', 'e', 'i', 'o', 'u'].includes(str[index].toLowerCase())) {
			result++;
		}
	}

	return result;
}

// console.log(vowels('bcdfghjkl'));

module.exports = vowels;
