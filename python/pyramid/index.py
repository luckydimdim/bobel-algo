# --- Directions
# Write a function that accepts a positive number N.
# The function should console log a pyramid shape
# with N levels using the # character.  Make sure the
# pyramid has spaces on both the left *and* right hand sides
# --- Examples
#   pyramid(1)
#       '#'
#   pyramid(2)
#       ' # '
#       '###'
#   pyramid(3)
#       '  #  '
#       ' ### '
#       '#####'


def pyramid(n):
	global result

	result = []

	build_pyramid(n)

	return "\n".join(result)

result = []

def build_pyramid(rows, row = 0, stage = ''):
	global result

	if rows == row:
		return

	width = rows * 2 - 1
	center = rows - 1

	if len(stage) == width:
		result.append(stage)
		build_pyramid(rows, row + 1)
		return

	if len(stage) < center - row or len(stage) > center + row:
		build_pyramid(rows, row, stage + ' ')
	else:
		build_pyramid(rows, row, stage + '#')


# pyramid(5)
