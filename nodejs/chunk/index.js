// --- Directions
// Given an array and chunk size, divide the array into many subarrays
// where each subarray is of length size
// --- Examples
// chunk([1, 2, 3, 4], 2) --> [[ 1, 2], [3, 4]]
// chunk([1, 2, 3, 4, 5], 2) --> [[ 1, 2], [3, 4], [5]]
// chunk([1, 2, 3, 4, 5, 6, 7, 8], 3) --> [[ 1, 2, 3], [4, 5, 6], [7, 8]]
// chunk([1, 2, 3, 4, 5], 4) --> [[ 1, 2, 3, 4], [5]]
// chunk([1, 2, 3, 4, 5], 10) --> [[ 1, 2, 3, 4, 5]]

function chunk1(array, size) {
	let result = [];
	let inner = [];

	for (let index = 1; index <= array.length; ++index) {
		inner.push(array[index-1]);	

		if (index % size === 0) {
			result.push(inner);
			inner = [];
		}
	}

	if (inner.length > 0) {
		result.push(inner);
	}

	return result;
}

function chunk2(array, size) {
	const result = [];

	for (let element of array) {
		const last = result[result.length-1];

		if (last === undefined || last.length === size) {
			result.push([element]);
		} else {
			last.push(element);
		}
	}

	return result;
}

function chunk(array, size) {
	const result = [];

	let multiplier = 0;

	while (array.length > multiplier) {
		result.push(array.slice(multiplier, multiplier + size));

		multiplier += size;
	}

	return result;
}

// console.log(chunk([1, 2, 3, 4, 5, 6, 7, 8], 3));

module.exports = chunk;
