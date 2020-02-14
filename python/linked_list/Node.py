# Creates a class instance to represent a node.
# The node should have two properties, 'data' and 'next'.
# Accept both of these as arguments to the 'Node' constructor,
# then assign them to the instance as properties 'data' and 'next'.
# If 'next' is not provided to the constructor,
# then default its value to be 'null'.
class Node:

    data = None
    next = None

    def __init__(self, data, next = None):
        self.data = data
        self.next = next
