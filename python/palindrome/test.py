import unittest
from index import palindrome

class TestMethods(unittest.TestCase):

	def test_palindrome_exists(self):
		self.assertTrue(callable(palindrome))

	def test_palindrome_works(self):
		self.assertTrue(palindrome("12321"))

	def test_palindrome_not_works(self):
		self.assertFalse(palindrome("112321"))		

if __name__ == '__main__':
	unittest.main()