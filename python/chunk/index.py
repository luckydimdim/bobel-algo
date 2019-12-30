# --- Directions
# Given an array and chunk size, divide the array into many subarrays
# where each subarray is of length size
# --- Examples
# chunk([1, 2, 3, 4], 2) --> [[ 1, 2], [3, 4]]
# chunk([1, 2, 3, 4, 5], 2) --> [[ 1, 2], [3, 4], [5]]
# chunk([1, 2, 3, 4, 5, 6, 7, 8], 3) --> [[ 1, 2, 3], [4, 5, 6], [7, 8]]
# chunk([1, 2, 3, 4, 5], 4) --> [[ 1, 2, 3, 4], [5]]
# chunk([1, 2, 3, 4, 5], 10) --> [[ 1, 2, 3, 4, 5]]

def chunk1(array, size):
	result = []

	for element in array:
		if len(result) == 0 or len(result[-1]) == size:
			result.append([element])
		else:
			result[-1].append(element)

	return result

def chunk(array, size):
	result = []
	index = 0

	while len(array) > index:
		result.append(array[index:index+size])
		index+=size

	return result

# print(chunk([1, 2, 3, 4, 5, 6, 7, 8], 3))