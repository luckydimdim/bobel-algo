import unittest
from index import fromLast
from LinkedList import LinkedList

class TestFromLast(unittest.TestCase):

    def test_from_last_is_a_function(self):
        self.assertTrue(callable(fromLast))

    def test_from_last_returns_the_node_n_elements_from_the_end(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')
        list.insertLast('c')
        list.insertLast('d')
        list.insertLast('e')

        self.assertEqual('b', fromLast(list, 3).data)

if __name__ == '__main__':
    unittest.main()