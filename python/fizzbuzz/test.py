import unittest
from index import fizz_buzz

class IndexTests(unittest.TestCase):

	def test_fizz_buzz_exists(self):
		self.assertTrue(callable(fizz_buzz));

	def test_fizz_buzz_works_properly(self):
		expected = "1\n2\nfizz\n4\nbuzz"
		actual = fizz_buzz(5)

		self.assertEqual(expected, actual)

if __name__ == '__main__':
	unittest.main()