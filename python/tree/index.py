# --- Directions
# 1) Create a node class.  The constructor
# should accept an argument that gets assigned
# to the data property and initialize an
# empty array for storing children. The node
# class should have methods 'add' and 'remove'.
# 2) Create a tree class. The tree constructor
# should initialize a 'root' property to null.
# 3) Implement 'traverseBF' and 'traverseDF'
# on the tree class.  Each method should accept a
# function that gets called with each element in the tree

class Node:

    def __init__(self, data):
        self.data = data
        self.children = []

    def add(self, data):
        node = Node(data)
        self.children.append(node)

    def remove(self, data):
        for node in self.children:
            if node.data == data:
                self.children.remove(node)

class Tree:

    def __init__(self):
        self.root = None

    def traverseBF(self, fn):
        array = []
        array.append(self.root)

        while len(array):
            node = array[0]
            del array[0]

            array = array + node.children

            fn(node)

    def traverseDF(self, fn):
        array = []
        array.append(self.root)

        while len(array):
            node = array[0]
            del array[0]

            array = node.children + array

            fn(node)