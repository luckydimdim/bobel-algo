import unittest
from Node import Node
from LinkedList import LinkedList

class TestLinkedList(unittest.TestCase):

    def test_node_exists(self):
        self.assertTrue(locals().get('Node', True))

    def test_node_has_correct_properties(self):
        node = Node(1, Node(2))

        self.assertTrue(node.data is not None)
        self.assertTrue(node.next is not None)

    def test_list_exists(self):
        self.assertTrue(locals().get('LinkedList', True))

    def test_insert_first_appends_a_node_to_the_start_of_the_list(self):
        list = LinkedList()

        list.insertFirst(1)
        self.assertEqual(1, list.head.data)

        list.insertFirst(2)
        self.assertEqual(2, list.head.data)

    def test_size_returns_the_number_of_items_in_the_linked_list(self):
        list = LinkedList()

        list.insertFirst(1)
        list.insertFirst(1)
        list.insertFirst(1)
        list.insertFirst(1)

        self.assertEqual(4, list.size())

if __name__ == '__main__':
    unittest.main()