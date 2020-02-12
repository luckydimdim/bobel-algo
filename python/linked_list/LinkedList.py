from Node import Node

class LinkedList:

    head = None

    def insertFirst(self, data):
        if self.head is None:
            self.head = Node(data)

            return

        self.head = Node(data, self.head)

    def size(self):
        counter = 0
        node = self.head

        if node is None:
            return counter

        while (node):
            counter += 1
            node = node.next

        return counter
