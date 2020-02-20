function bubbleSort2(array) {
	const length = array.length;

	for (let bypass = 1; bypass < length; ++bypass) {
		for (let k = 0; k < length - 1; ++k) {
			if (array[k] > array[k + 1]) {
				let temp = array[k + 1];
				array[k + 1] = array[k];
				array[k] = temp;
			}
		}
	}

	return array;
}

function bubbleSort(arr) {
	for (let i = 0; i < arr.length; ++i) {
		for (let j = 0; j < arr.length - i - 1; ++j) {
			if (arr[j] > arr[j + 1]) {
				let temp = arr[j];
				arr[j] = arr[j + 1];
				arr[j + 1] = temp;
			}
		}
	}

	return arr;
}

module.exports = bubbleSort;