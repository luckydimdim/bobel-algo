import unittest
from Node import Node
from index import validate

class TestValidate(unittest.TestCase):

    def test_validate_recognizes_a_valid_BST(self):
        node = Node(10)
        node.insert(5)
        node.insert(15)
        node.insert(0)
        node.insert(20)

        self.assertTrue(validate(node))

    def test_validate_recognizes_an_invalid_BST(self):
        node = Node(10)
        node.insert(5)
        node.insert(15)
        node.insert(0)
        node.insert(20)
        node.left.left.right = Node(999)

        self.assertFalse(validate(node))

if __name__ == '__main__':
    unittest.main()