function bubbleSort(array) {
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

module.exports = bubbleSort;