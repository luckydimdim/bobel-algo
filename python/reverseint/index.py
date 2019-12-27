import math

def reverse_int(n):
	'''
	--- Directions
		Given an integer, return an integer that is the reverse
		ordering of numbers.
	--- Examples
		reverseInt(15) === 51
	    reverseInt(981) === 189
		reverseInt(500) === 5
		reverseInt(-15) === -51
		reverseInt(-90) === -9
	'''
	string = str(n)

	chars = list(string)
	result = ''

	for char in chars:
		if char == '-':
			continue

		result = char + result

	result = int(result)

	if (n < 0):
		result *= -1

	return result