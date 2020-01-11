import unittest
from index import fib


class IndexTest(unittest.TestCase):

    def test_function_exists(self):
        self.assertTrue(callable(fib))

    def test_calculates_correct_fib_value_for_1(self):
        expected = 1
        actual = fib(1)

        self.assertEqual(expected, actual)

    def test_calculates_correct_fib_value_for_2(self):
        expected = 1
        actual = fib(2)

        self.assertEqual(expected, actual)

    def test_calculates_correct_fib_value_for_3(self):
        expected = 2
        actual = fib(3)

        self.assertEqual(expected, actual)

    def test_calculates_correct_fib_value_for_4(self):
        expected = 3
        actual = fib(4)

        self.assertEqual(expected, actual)

    def test_calculates_correct_fib_value_for_39(self):
        expected = 63245986
        actual = fib(39)

        self.assertEqual(expected, actual)

if __name__ == '__main__':
    unittest.main()