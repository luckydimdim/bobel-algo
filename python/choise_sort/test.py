import unittest
from index import choice_sort

class TestMethods(unittest.TestCase):

    def test_choice_sort_function_exists(self):
        self.assertTrue(callable(choice_sort))

    def test_function_choice_sort_arranges_unsorted_array(self):
        self.assertEqual(choice_sort([5,3,1,4,2]), [1,2,3,4,5])

    def test_function_choice_sort_arranges_sorted_array(self):
        self.assertEqual(choice_sort([1,2,3,4,5]), [1,2,3,4,5])

if __name__ == '__main__':
    unittest.main()