import unittest
from index import capitalize

class TestIndex(unittest.TestCase):

	def test_function_exists(self):
		self.assertTrue(callable(capitalize))

	def test_capitalizes_the_first_letter_of_every_word_in_a_sentence(self):
		expected = 'Hi There, How Is It Going?'
		actual = capitalize('hi there, how is it going?')

		self.assertEqual(expected, actual)

	def test_capitalizes_the_first_letter(self):
		expected = 'I Love Breakfast At Bill Miller Bbq'
		actual = capitalize('i love breakfast at bill miller bbq')

		self.assertEqual(expected, actual)		

if __name__ == '__main__':
	unittest.main()