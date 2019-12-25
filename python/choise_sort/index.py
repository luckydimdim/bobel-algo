def choice_sort(array):
	length = len(array)

	for pos in range(0, length-1):
		for k in range(pos+1, length):
			if array[k] < array[pos]:
				array[k], array[pos] = array[pos], array[k]

	return array