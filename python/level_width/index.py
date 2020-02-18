from Node import Node

# --- Directions
# Given the root node of a tree, return
# an array where each element is the width
# of the tree at each level.
# --- Example
# Given:
#     0
#   / |  \
#  1  2   3
#  |      |
#  4      5
# Answer: [1, 3, 2]

def levelWidth(root):
    result = []
    array = [root, 'stop']
    counter = 0

    while len(array):
        node = array[0]
        array.remove(node)

        if node == 'stop':
            if counter == 0:
                return result

            array.append('stop')
            result.append(counter)
            counter = 0
        else:
            counter += 1
            array += node.children

    return result