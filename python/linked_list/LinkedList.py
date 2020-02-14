from Node import Node

# Create a class to represent a linked list.
# When created, a linked list should have *no*
# head node associated with it.
# The LinkedList instance will have one property,
# 'head', which is a reference to the first node
# of the linked list. By default 'head' should be 'null'.
class LinkedList:

    head = None

    def insertFirst(self, data):
        '''
        Creates a new Node from argument 'data'
        and assigns the resulting node to the 'head' property.
        Make sure to handle the case in which the linked list already
        has a node assigned to the 'head' property.
        '''

        if self.head is None:
            self.head = Node(data)

            return

        self.head = Node(data, self.head)

    def size(self):
        '''
        Returns the number of nodes in the linked list.
        '''

        counter = 0
        node = self.head

        if node is None:
            return counter

        while (node):
            counter += 1
            node = node.next

        return counter

    def getFirst(self):
        '''
        Returns the first node of the linked list.
        '''

        return self.head

    def getLast(self):
        '''
        Returns the last node of the linked list.
        '''

        if self.head is None:
            return self.head

        node = self.head

        while (node.next):
            node = node.next

        return node

    def clear(self):
        '''
        Empties the linked list of any nodes.
        '''

        self.head = None

    def removeFirst(self):
        '''
        Removes only the first node of the linked list.
        The list's head should now be the second element.
        '''

        if self.head is None:
            return

        self.head = self.head.next

    def removeLast(self):
        '''
        Removes the last node of the chain.
        '''

        if self.head is None:
            return

        if self.head.next is None:
            self.head = None
            return

        previous = self.head
        current = self.head.next

        while (current.next):
            previous = previous.next
            current = current.next

        previous.next = None

    def insertLast(self, data):
        '''
        Inserts a new node with provided data at the end of the chain.
        '''

        if self.head is None:
            self.head = Node(data)
            return

        node = self.getLast()
        node.next = Node(data)

    def getAt(self, index):
        '''
        Returns the node at the provided index.
        '''

        if self.head is None:
            return None

        counter = 0
        node = self.head

        while (node):
            if counter == index:
                return node

            node = node.next
            counter += 1

        return None

    def removeAt(self, index):
        '''
        Removes node at the provided index.
        '''

        if self.head is None:
            return

        if index < 0:
            return

        if index == 0:
            self.head = self.head.next
            return

        previous = self.getAt(index-1)
        next = self.getAt(index+1)

        if previous is None:
            return

        previous.next = next

    def insertAt(self, data, index):
        '''
        Create an insert a new node at provided index.
        If index is out of bounds, add the node to the end of the list.
        '''

        if index == 0:
            self.head = Node(data, self.head)
            return

        if self.head is None:
            return

        node = self.getAt(index-1)

        if node is None:
            node = self.getLast()

        node.next = Node(data, node.next)

    def forEach(self, fn):
        '''
        Calls the provided function with every node of the chain.
        '''

        if self.head is None:
            return

        node = self.head

        while (node):
            fn(node)
            node = node.next

    def iterateNodes(self):
        '''
        Linked list should be compatible as the subject of a 'for...in' loop
        '''

        if self.head is None:
            return

        node = self.head

        while (node):
            yield node
            node = node.next