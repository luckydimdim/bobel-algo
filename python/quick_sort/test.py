import unittest
from index import hoar_sort

class TestMethods(unittest.TestCase):

	def test_hoar_sort_exists(self):
		self.assertTrue(callable(hoar_sort))

	def test_hoar_sort_arranges_unsorted_array(self):
		self.assertEqual(hoar_sort([5,3,1,4,2]), [1,2,3,4,5])

	def test_hoar_sort_arranges_sorted_array(self):
		self.assertEqual(hoar_sort([1,2,3,4,5]), [1,2,3,4,5])

if __name__ == '__main__':
	unittest.main()