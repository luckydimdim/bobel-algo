# --- Directions
# Write a function that accepts a string.  The function should
# capitalize the first letter of each word in the string then
# return the capitalized string.
# --- Examples
#   capitalize('a short sentence') --> 'A Short Sentence'
#   capitalize('a lazy fox') --> 'A Lazy Fox'
#   capitalize('look, it is working!') --> 'Look, It Is Working!'

def capitalize(input):
	result = input[0].upper()

	for index in range(1, len(input)):
		if input[index-1] == " ":
			result += input[index].upper()
		else:
			result += input[index]

	return result

# print(capitalize("a short sentence"))
