// --- Directions
// Check to see if two provided strings are anagrams of eachother.
// One string is an anagram of another if it uses the same characters
// in the same quantity. Only consider characters, not spaces
// or punctuation.  Consider capital letters to be the same as lower case
// --- Examples
//   anagrams('rail safety', 'fairy tales') --> True
//   anagrams('RAIL! SAFETY!', 'fairy tales') --> True
//   anagrams('Hi there', 'Bye there') --> False

function anagrams1(stringA, stringB) {
	const mapA = {},
		mapB = {};

	const charsA = stringA.replace(/\W/g, '').toLowerCase().split('');

	for (let char of charsA) {
		if (mapA[char] === undefined) {
			mapA[char] = 1;
		} else {
			mapA[char]++;
		}
	}

	const charsB = stringB.replace(/\W/g, '').toLowerCase().split('');

	for (let char of charsB) {
		if (mapB[char] === undefined) {
			mapB[char] = 1;
		} else {
			mapB[char]++;
		}
	}

	if (Object.keys(mapA).length !== Object.keys(mapB).length) {
		return false;
	}

	for (let char in mapA) {
		if (mapB[char] === undefined) {
			return false;
		}

		if (mapB[char] !== mapA[char]) {
			return false;
		}
	}

	return true;
}

function anagrams(stringA, stringB) {
	const a = stringA
		.replace(/\W/g, '')
		.toLowerCase()
		.split('')
		.sort()
		.join('');

	const b = stringB
		.replace(/\W/g, '')
		.toLowerCase()
		.split('')
		.sort()
		.join('');

	return a === b;
}

console.log(anagrams('ab c!', 'c! aB!'));

module.exports = anagrams;
