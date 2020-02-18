import unittest
from index import Tree
from index import Node

class TestTree(unittest.TestCase):

    def test_tree_exists(self):
        self.assertTrue(locals().get('Tree', True))

    def test_node_exists(self):
        self.assertTrue(locals().get('Node', True))

    def test_node_has_a_data_and_children_properties(self):
        n = Node('a')

        self.assertEqual('a', n.data)
        self.assertEqual(0, len(n.children))

    def test_node_can_add_children(self):
        n = Node('a')
        n.add('b')

        self.assertEqual(1, len(n.children))
        self.assertEqual([], n.children[0].children)

    def test_node_can_remove_children(self):
        n = Node('a')
        n.add('b')

        self.assertEqual(1, len(n.children))
        n.remove('b')
        self.assertEqual(0, len(n.children))

    def test_tree_can_traverse_bf(self):
        letters = []
        t = Tree()
        t.root = Node('a')
        t.root.add('b')
        t.root.add('c')
        t.root.children[0].add('d')

        def fn(node):
            letters.append(node.data)

        t.traverseBF(fn)
        self.assertEqual(['a', 'b', 'c', 'd'], letters)

    def test_tree_can_traverse_df(self):
        letters = []
        t = Tree()
        t.root = Node('a')
        t.root.add('b')
        t.root.add('d')
        t.root.children[0].add('c')

        def fn(node):
            letters.append(node.data)

        t.traverseDF(fn)
        self.assertEqual(['a', 'b', 'c', 'd'], letters)

if __name__ == '__main__':
    unittest.main()