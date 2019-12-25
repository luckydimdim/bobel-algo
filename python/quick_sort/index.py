def hoar_sort(array):
	if len(array) <= 1:
		return

	barrier = array[0]
	left = []
	middle = []
	right = []

	for x in array:
		if x < barrier:
			left.append(x)
		elif x == barrier:
			middle.append(x)
		else:
			right.append(x)

	hoar_sort(left)
	hoar_sort(right)

	index = 0

	for x in left+middle+right:
		array[index] = x
		index += 1

	return array