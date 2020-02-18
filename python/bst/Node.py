# --- Directions
# 1) Implement the Node class to create
# a binary search tree.  The constructor
# should initialize values 'data', 'left',
# and 'right'.
# 2) Implement the 'insert' method for the
# Node class.  Insert should accept an argument
# 'data', then create an insert a new node
# at the appropriate location in the tree.
# 3) Implement the 'contains' method for the Node
# class.  Contains should accept a 'data' argument
# and return the Node in the tree with the same value.

class Node():

    def __init__(self, data):
        self.data = data
        self.left = None
        self.right = None

    def insert(self, data):
        if data < self.data:
            if self.left:
                self.left.insert(data)
            else:
                self.left = Node(data)
        else:
            if self.right:
                self.right.insert(data)
            else:
                self.right = Node(data)

    def contains(self, data):
        if data < self.data:
            if self.left:
                return self.left.contains(data)
            else:
                return None
        elif data > self.data:
            if self.right:
                return self.right.contains(data)
            else:
                return None
        else:
            return self
