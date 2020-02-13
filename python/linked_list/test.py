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

    def test_get_first_returns_the_first_element(self):
        list = LinkedList()

        list.insertFirst(1)
        self.assertEqual(1, list.getFirst().data)

        list.insertFirst(2)
        self.assertEqual(2, list.getFirst().data)

    def test_get_last_returns_the_last_element(self):
        list = LinkedList()

        list.insertFirst(2)
        self.assertEqual(2, list.getLast().data)

        list.insertFirst(1)
        self.assertEqual(2, list.getLast().data)

    def test_clear_empties_out_the_list(self):
        list = LinkedList()
        list.insertFirst(1)
        list.insertFirst(1)
        list.insertFirst(1)
        list.insertFirst(1)

        list.clear()

        self.assertEqual(0, list.size())


    def test_remove_first_removes_the_first_node_when_the_list_has_a_size_of_one(self):
        list = LinkedList();
        list.insertFirst('a')
        list.removeFirst()

        self.assertEqual(0, list.size())
        self.assertEqual(None, list.getFirst())

    def test_remove_first_removes_the_first_node_when_the_list_has_a_size_of_three(self):
        list = LinkedList();
        list.insertFirst('c')
        list.insertFirst('b')
        list.insertFirst('a')

        list.removeFirst()

        self.assertEqual(2, list.size())
        self.assertEqual('b', list.getFirst().data)

        list.removeFirst()

        self.assertEqual(1, list.size())
        self.assertEqual('c', list.getFirst().data)

    def test_remove_last_removes_the_last_node_when_list_is_empty(self):
        list = LinkedList();

        try:
            list.removeLast();
            self.assertTrue(True)
        except:
            self.assertTrue(False)

    def test_remove_last_removes_the_last_node_when_list_is_length_2(self):
        list = LinkedList()

        list.insertFirst('b')
        list.insertFirst('a')

        list.removeLast()

        self.assertEqual(1, list.size())
        self.assertEqual('a', list.head.data)

    def test_remove_last_removes_the_last_node_when_list_is_length_3(self):
        list = LinkedList()

        list.insertFirst('c')
        list.insertFirst('b')
        list.insertFirst('a')

        list.removeLast()

        self.assertEqual(2, list.size())
        self.assertEqual('b', list.getLast().data)

    def test_insert_last_adds_to_the_end_of_the_list(self):
        list = LinkedList()

        list.insertFirst('a')
        list.insertLast('b')

        self.assertEqual(2, list.size())
        self.assertEqual('b', list.getLast().data)

    def test_get_at_returns_the_node_at_given_index(self):
        list = LinkedList()

        list.insertLast(1)
        list.insertLast(2)
        list.insertLast(3)
        list.insertLast(4)

        self.assertEqual(1, list.getAt(0).data)
        self.assertEqual(2, list.getAt(1).data)
        self.assertEqual(3, list.getAt(2).data)
        self.assertEqual(4, list.getAt(3).data)

    def test_remove_at_doesnt_crash_on_an_empty_list(self):
        list = LinkedList()

        try:
            list.removeAt(0)
            list.removeAt(1)
            list.removeAt(2)
            self.assertTrue(True)
        except:
            self.assertTrue(False)

    def test_remove_at_doesnt_crash_on_an_index_out_of_bounds(self):
        list = LinkedList()
        list.insertLast(1)

        try:
            list.removeAt(1)
            self.assertTrue(True)
        except:
            self.assertTrue(False)

    def test_remove_at_deletes_the_first_node(self):
        list = LinkedList()

        list.insertLast(1)
        list.insertLast(2)
        list.insertLast(3)
        list.insertLast(4)

        list.removeAt(0)

        self.assertEqual(2, list.getAt(0).data)

    def test_remove_at_deletes_the_node_at_the_given_index(self):
        list = LinkedList()

        list.insertLast(1)
        list.insertLast(2)
        list.insertLast(3)
        list.insertLast(4)

        list.removeAt(1)

        self.assertEqual(3, list.getAt(1).data)

    def test_remove_at_works_on_the_last_node(self):
        list = LinkedList()

        list.insertLast(1)
        list.insertLast(2)
        list.insertLast(3)
        list.insertLast(4)

        list.removeAt(3)

        self.assertEqual(None, list.getAt(3))

    def test_insert_at_inserts_a_new_node_with_data_at_the_0_index_when_the_list_is_empty(self):
        list = LinkedList()

        list.insertAt('hi', 0)
        self.assertEqual('hi', list.getFirst().data);

    def test_insert_at_inserts_a_new_node_with_data_at_the_0_index_when_the_list_has_elements(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')
        list.insertLast('c')
        list.insertAt('hi', 0)

        self.assertEqual('hi', list.getAt(0).data)
        self.assertEqual('a', list.getAt(1).data)

    def test_isert_at_inserts_a_new_node_with_data_at_a_middle_index(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')
        list.insertLast('c')
        list.insertLast('d')
        list.insertAt('hi', 2)

        self.assertEqual('a', list.getAt(0).data)
        self.assertEqual('b', list.getAt(1).data)
        self.assertEqual('hi', list.getAt(2).data)
        self.assertEqual('c', list.getAt(3).data)
        self.assertEqual('d', list.getAt(4).data)

    def test_isert_at_inserts_a_new_node_with_data_at_a_last_index(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')
        list.insertAt('hi', 2)

        self.assertEqual('a', list.getAt(0).data)
        self.assertEqual('b', list.getAt(1).data)
        self.assertEqual('hi', list.getAt(2).data)

    def test_isert_at_inserts_a_new_node_when_index_is_out_of_bounds(self):
        list = LinkedList()

        list.insertLast('a')
        list.insertLast('b')
        list.insertAt('hi', 30)

        self.assertEqual('a', list.getAt(0).data)
        self.assertEqual('b', list.getAt(1).data)
        self.assertEqual('hi', list.getAt(2).data)

if __name__ == '__main__':
    unittest.main()