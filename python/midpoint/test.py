import unittest
from index import midpoint
from LinkedList import LinkedList

class TestMidpoint(unittest.TestCase):

    def test_midpoint_is_a_function(self):
        self.assertTrue(callable(midpoint))

    def test_midpoint_returns_the_middle_node_of_an_odd_numbered_list_when_the_list_has_3_elements(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')
        list.insertLast('c')

        self.assertEqual('b', midpoint(list).data)

    def test_midpoint_returns_the_middle_node_of_an_odd_numbered_list_when_the_list_has_5_elements(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')
        list.insertLast('c')
        list.insertLast('d')
        list.insertLast('e')

        self.assertEqual('c', midpoint(list).data)

    def test_midpoint_returns_the_middle_node_of_an_even_numbered_list(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')

        self.assertEqual('a', midpoint(list).data)

    def test_midpoint_returns_the_middle_node_of_an_even_numbered_list_when_the_list_has_2_elements(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')

        self.assertEqual('a', midpoint(list).data)

    def test_midpoint_returns_the_middle_node_of_an_even_numbered_list_when_the_list_has_4_elements(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')
        list.insertLast('c')
        list.insertLast('d')

        self.assertEqual('b', midpoint(list).data)

if __name__ == '__main__':
    unittest.main()