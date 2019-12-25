import unittest
from index import insert_sort

class TestMethods(unittest.TestCase):

	def test_insert_sort_exists(self):
		self.assertTrue(callable(insert_sort))

	def test_insert_sort_arranges_unsorted_array(self):
		self.assertEqual(insert_sort([5,3,1,4,2]), [1,2,3,4,5])

	def test_insert_sort_arranges_sorted_array(self):
		self.assertEqual(insert_sort([1,2,3,4,5]), [1,2,3,4,5])

if __name__ == '__main__':
	unittest.main()