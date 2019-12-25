def palindrome(str):
	chars = list(str)
	reverted = ''

	for char in chars:
		reverted = char + reverted

	return str == reverted