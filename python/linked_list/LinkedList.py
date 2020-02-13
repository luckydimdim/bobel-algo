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

    def getFirst(self):
        return self.head

    def getLast(self):
        if self.head is None:
            return self.head

        node = self.head

        while (node.next):
            node = node.next

        return node

    def clear(self):
        self.head = None

    def removeFirst(self):
        if self.head is None:
            return

        self.head = self.head.next

    def removeLast(self):
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
        if self.head is None:
            self.head = Node(data)
            return

        node = self.getLast()
        node.next = Node(data)

    def getAt(self, index):
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
        if index == 0:
            self.head = Node(data, self.head)
            return

        if self.head is None:
            return

        node = self.getAt(index-1)

        if node is None:
            node = self.getLast()

        node.next = Node(data, node.next)

#list = LinkedList()
#list.insertAt('hi', 0)
#print(list.getFirst().data)