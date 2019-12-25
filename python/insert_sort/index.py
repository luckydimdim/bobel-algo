def insert_sort(array):
	length = len(array)

	for top in range(1, length):
		k = top

		while k > 0 and array[k-1] > array[k]:
			array[k], array[k-1] = array[k-1], array[k]
			k -= 1

	return array

print(insert_sort([5,3,1,4,2]))