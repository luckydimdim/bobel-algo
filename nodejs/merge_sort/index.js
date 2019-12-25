function merge(left, right) {
	let result = [];
	let leftIndex = rightIndex = 0;

	for (;leftIndex < left.length && rightIndex < right.length;) {
		if (left[leftIndex] <= right[rightIndex]) {
			result.push(left[leftIndex]);
			leftIndex++;
		} else {
			result.push(right[rightIndex]);
			rightIndex++;
		}
	}

	for (;leftIndex < left.length;++leftIndex) {
		result.push(left[leftIndex]);
	}

	for (;rightIndex < right.length;++rightIndex) {
		result.push(right[rightIndex]);
	}

	return result;
}

function mergeSort(array) {
	if (array.length <= 1) {
		return;
	}

	const middle = Math.floor(array.length / 2);

	let left = [];
	let right = [];

	for (let ind = 0; ind < middle; ++ind) {
		left.push(array[ind]);
	}

	for (let ind = middle; ind < array.length; ++ind) {
		right.push(array[ind]);
	}

	mergeSort(left);
	mergeSort(right);

	const mergeResult = merge(left, right);

	for (let index = 0; index < mergeResult.length; ++index) {
		array[index] = mergeResult[index];
	}

	return array;
}

module.exports = mergeSort;