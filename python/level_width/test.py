import unittest
from index import levelWidth
from Node import Node

class TestLevelWidth(unittest.TestCase):

    def test_level_width_is_a_function(self):
        self.assertTrue(callable(levelWidth))

    def test_level_width_returns_number_of_node_at_widest_point(self):
        root = Node(0)
        root.add(1)
        root.add(2)
        root.add(3)
        root.children[0].add(4)
        root.children[2].add(5)

        self.assertEqual([1, 3, 2], levelWidth(root))

    def test_level_width_returns_number_of_node_at_widest_point2(self):
        root = Node(0)
        root.add(1)
        root.children[0].add(2)
        root.children[0].add(3)
        root.children[0].children[0].add(4)

        self.assertEqual([1, 1, 2, 1], levelWidth(root))

if __name__ == '__main__':
    unittest.main()