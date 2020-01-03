# --- Directions
# Write a function that accepts a positive number N.
# The function should console log a step shape
# with N levels using the # character.  Make sure the
# step has spaces on the right hand side!
# --- Examples
#   steps(2)
#       '# '
#       '##'
#   steps(3)
#       '#  '
#       '## '
#       '###'
#   steps(4)
#       '#   '
#       '##  '
#       '### '
#       '####'

result = []


def create_steps(n, current_row=0, stage=''):
    global result

    if current_row == n:
        return

    if len(stage) == n:
        result.append(stage)
        return create_steps(n, current_row+1, '')

    if len(stage) <= current_row:
        create_steps(n, current_row, stage + '#')
    else:
        create_steps(n, current_row, stage + ' ')


def steps(n):
	global result

	create_steps(n, 0, '')

	temp = '\n'.join(result)
	result = []

	return temp

#print(steps(4))
