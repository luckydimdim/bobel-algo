def merge(left, right):
	result = [0] * (len(left) + len(right))

	leftIndex = rightIndex = resultIndex = 0

	while leftIndex < len(left) and rightIndex < len(right):
		if left[leftIndex] <= right[rightIndex]:
			result[resultIndex] = left[leftIndex]
			leftIndex += 1
			resultIndex += 1
		else:
			result[resultIndex] = right[rightIndex]
			rightIndex += 1
			resultIndex += 1

	while leftIndex < len(left):
		result[resultIndex] = left[leftIndex]
		leftIndex += 1
		resultIndex += 1

	while rightIndex < len(right):
		result[resultIndex] = right[rightIndex]
		rightIndex += 1
		resultIndex += 1

	return result


def merge_sort(array):
	if len(array) <= 1:
		return

	middle = len(array) // 2

	left = [array[i] for i in range(0, middle)]
	right = [array[i] for i in range(middle, len(array))]

	merge_sort(left)
	merge_sort(right)

	result = merge(left, right)

	for i in range(len(array)):
		array[i] = result[i]

	return array