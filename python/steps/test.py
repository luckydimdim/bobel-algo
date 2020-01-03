import unittest
from index import steps


class IndexTest(unittest.TestCase):

	def test_function_exists(self):
		self.assertTrue(callable(steps))

	def test_steps_called_with_n_1(self):
		expected = '#'
		actual = steps(1)

		self.assertEqual(expected, actual)

	def test_steps_called_with_n_2(self):
		expected = "# \n##"
		actual = steps(2)

		self.assertEqual(expected, actual)

	def test_steps_called_with_n_3(self):
		expected = "#  \n## \n###"
		actual = steps(3)

		self.assertEqual(expected, actual)		

if __name__ == '__main__':
	unittest.main()