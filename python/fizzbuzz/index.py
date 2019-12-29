# --- Directions
# Write a program that console logs the numbers
# from 1 to n. But for multiples of three print
# "fizz" instead of the number and for the multiples
# of five print "buzz". For numbers which are multiples
# of both three and five print "fizzbuzz".
# --- Example
#   fizz_buzz(5);
#   1
#   2
#   fizz
#   4
#   buzz
def fizz_buzz(digit):
	result = []

	for i in range(1, digit+1):
		current = ""

		if i % 3 == 0:
			current = "fizz"

		if i % 5 == 0:
			current += "buzz"

		if current == "":
			current = i

		result.append(str(current))

	return "\n".join(result)

# print(fizz_buzz(5))