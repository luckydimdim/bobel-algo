function choiseSort(array) {
	for (let outerIndex = 0; outerIndex < array.length - 1; ++outerIndex) {
		for (let innerIndex = outerIndex + 1; innerIndex < array.length; ++innerIndex) {
			if (array[outerIndex] > array[innerIndex]) {
				let temp = array[outerIndex];
				array[outerIndex] = array[innerIndex];
				array[innerIndex] = temp;
			}
		}
	}

	return array;
}

module.exports = choiseSort;