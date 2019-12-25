function quickSort(array) {
	if (array.length <= 1) {
		return;
	}

	const barrier = array[0];
	let left = [];
	let middle = [];
	let right = [];

	for (let x of array) {
		if (x > barrier) {
			right.push(x);
		} else if (x === barrier) {
			middle.push(x);
		} else {
			left.push(x);
		}
	}

	quickSort(left);
	quickSort(right);

	let mainIndex = 0;

	for (let index = 0; index < left.length; ++index) {
		array[mainIndex] = left[index];

		mainIndex++;
	}

	for (let index = 0; index < middle.length; ++index) {
		array[mainIndex] = middle[index];

		mainIndex++;
	}

	for (let index = 0; index < right.length; ++index) {
		array[mainIndex] = right[index];

		mainIndex++;
	}

	return array;
}

module.exports = quickSort;