import unittest
from index import circular
from Node import Node
from LinkedList import LinkedList

class TestCircular(unittest.TestCase):

    def test_circular_is_function(self):
        self.assertTrue(callable(circular))

    def test_circular_detects_circular_linked_lists(self):
        list = LinkedList()

        a = Node('a')
        b = Node('b')
        c = Node('c')

        list.head = a
        a.next = b
        b.next = c
        c.next = b

        self.assertTrue(circular(list))

    def test_circular_detects_circular_linked_lists_linked_at_the_head(self):
        list = LinkedList()

        a = Node('a')
        b = Node('b')
        c = Node('c')

        list.head = a
        a.next = b
        b.next = c
        c.next = a

        self.assertTrue(circular(list))

    def test_circular_detects_non_circular_linked_lists(self):
        list = LinkedList()

        a = Node('a')
        b = Node('b')
        c = Node('c')

        list.head = a
        a.next = b
        b.next = c
        c.next = None

        self.assertFalse(circular(list))

if __name__ == '__main__':
    unittest.main()