import functools

def reverse(str):
	'''
	--- Directions
	Given a string, return a new string with the reversed
	order of characters
	--- Examples
	  reverse('apple') === 'leppa'
	  reverse('hello') === 'olleh'
	  reverse('Greetings!') === '!sgniteerG'
	'''

	if not str:
		return False

	# 1.
	#result = []
	#result[:0] = str
	#result.reverse()
	#result = ''.join(result)

	# 2.
	result = ''
	chars = []
	chars[:0] = str

	for char in chars:
		result = char + result

	return result