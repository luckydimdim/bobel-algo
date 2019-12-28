// --- Directions
// Given a string, return the character that is most
// commonly used in the string.
// --- Examples
// maxChar("abcccccccd") === "c"
// maxChar("apple 1231111") === "1"

function maxChar(str) {
	let dictionary = {};
	let maxLetter = str[0];
	let maxLetterCounter = 0;

	for (let letter of str) {
		dictionary[letter] = dictionary[letter] + 1 || 1;
	}

	for (let letter in dictionary) {
		if (dictionary.hasOwnProperty(letter)) {
			
			if (dictionary[letter] > maxLetterCounter) {
				maxLetterCounter = dictionary[letter];
				maxLetter = letter;
			}
	   	}
	}

	return maxLetter;
}

module.exports = maxChar;
