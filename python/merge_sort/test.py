import unittest
from index import merge, merge_sort

class TestMethods(unittest.TestCase):

	def test_merge_exists(self):
		self.assertTrue(merge)

	def test_merge_sort_exists(self):
		self.assertTrue(merge_sort)

	def test_merge_concatenates_and_arranges_arrays(self):
		self.assertEqual(merge([6,7,8,9,10], [1,2,3,4,5]), [1,2,3,4,5,6,7,8,9,10])

	def test_merge_insites(self):
		self.assertEqual(merge([1,2], [3,2]), [1,2,3,2])

	def test_merge_sort_arranges_unsorted_array(self):
		self.assertEqual(merge_sort([5,4,3,2,1]), [1,2,3,4,5])

	def test_merge_sort_arranges_sorted_array(self):
		self.assertEqual(merge_sort([1,2,3,4,5]), [1,2,3,4,5])

if __name__ == '__main__':
	unittest.main()