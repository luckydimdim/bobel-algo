from Node import Node

# --- Directions
# Given a node, validate the binary search tree,
# ensuring that every node's left hand child is
# less than the parent node's value, and that
# every node's right hand child is greater than
# the parent

def validate(node, minimum = None, maximum = None):
    if minimum is not None and node.data < minimum:
        return False

    if maximum is not None and node.data > maximum:
        return False

    if node.left:
        if not validate(node.left, minimum, node.data):
            return False

    if node.right:
        if not validate(node.right, node.data, maximum):
            return False

    return True
