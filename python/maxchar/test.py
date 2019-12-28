import unittest
from index import max_char

class TestFunction(unittest.TestCase):

	def test_function_exists(self):
		self.assertTrue(callable(max_char))

	def test_finds_the_most_frequently_used_char(self):
		self.assertEqual(max_char('a'), 'a')
		self.assertEqual(max_char('abcdefghijklmnaaaaa'), 'a')

	def test_works_with_numbers_in_the_string(self):
		self.assertEqual(max_char('ab1c1d1e1f1g1'), '1')

if __name__ == '__main__':
	unittest.main()