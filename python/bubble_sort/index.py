def bubble_sort(array):
	length = len(array)

	for bypass in range(1, length):
		for k in range(0, length-bypass):
			if array[k] > array[k+1]:
				array[k], array[k+1] = array[k+1], array[k]

	return array