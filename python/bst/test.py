import unittest
from Node import Node
from pprint import pprint

class TestNode(unittest.TestCase):

    def test_node_is_a_class(self):
        self.assertTrue(locals().get('Node', True))

    def test_node_can_insert_correctly(self):
        node = Node(10)
        node.insert(5)
        node.insert(15)
        node.insert(17)

        self.assertEqual(5, node.left.data)
        self.assertEqual(15, node.right.data)
        self.assertEqual(17, node.right.right.data)

    def test_contains_returns_node_with_the_same_data(self):
        node = Node(10)
        node.insert(5)
        node.insert(15)
        node.insert(20)
        node.insert(0)
        node.insert(-5)
        node.insert(3)

        self.assertEqual(node.left.left.right, node.contains(3))

if __name__ == '__main__':
    unittest.main()