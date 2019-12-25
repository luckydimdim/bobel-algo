// --- Directions
// Given a string, return true if the string is a palindrome
// or false if it is not.  Palindromes are strings that
// form the same word if it is reversed. *Do* include spaces
// and punctuation in determining if the string is a palindrome.
// --- Examples:
//   palindrome("abba") === true
//   palindrome("abcdefg") === false

function palindrome(str) {
	if (!str) {
		return '';
	}

	const length = Math.floor(str.length / 2);
	const chars = str.split('');
	const revertedChars = str.split('').reverse();

	// 1.
	// return revertedChars.join('') === str;

	// 2.
	// for (let charIndex = 0; charIndex < length; ++charIndex) {
	//	 if (chars[charIndex] !== revertedChars[charIndex]) {
	//		 return false;
	//	 }
	// }

	// return true;

	// 3.
	return str.split('').every((char, charIndex) => char === str[str.length - charIndex - 1]);
}

module.exports = palindrome;
