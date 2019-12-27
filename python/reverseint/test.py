import unittest
from index import reverse_int

class TestMethods(unittest.TestCase):

	def test_reverse_int_exists(self):
		self.assertTrue(callable(reverse_int))

	def test_reverse_int_handles_0_as_an_input(self):
		self.assertEqual(reverse_int(0), 0)

	def test_reverse_int_flips_a_positive_number(self):
		self.assertEqual(reverse_int(5), 5)
		self.assertEqual(reverse_int(15), 51)
		self.assertEqual(reverse_int(90), 9)
		self.assertEqual(reverse_int(2359), 2359)

	def test_reverse_int_flips_a_negative_number(self):
		self.assertEqual(reverse_int(-5), -5)
		self.assertEqual(reverse_int(-15), -51)
		self.assertEqual(reverse_int(-90), -9)
		self.assertEqual(reverse_int(-2359), -9532)

if __name__ == '__main__':
	unittest.main()