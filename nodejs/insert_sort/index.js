function insertSort(array) {
	for (let outerIndex = 1; outerIndex < array.length; ++outerIndex) {
		innerIndex = outerIndex;

		while (innerIndex > 0 && array[innerIndex - 1] > array[innerIndex]) {
			let temp = array[innerIndex - 1];
			array[innerIndex - 1] = array[innerIndex];
			array[innerIndex] = temp;

			innerIndex--;
		}
	}

	return array;
}

module.exports = insertSort;