import unittest
from index import vowels


class IndexTest(unittest.TestCase):

    def test_function_exists(self):
        self.assertTrue(callable(vowels))

    def test_returns_the_number_of_vowels_used(self):
        expected = 5
        actual = vowels('aeiou')

        self.assertEqual(expected, actual)

    def test_returns_the_number_of_vowels_used_when_they_are_capitalized(self):
        expected = 5
        actual = vowels('AEIOU')

        self.assertEqual(expected, actual)

    def test_returns_the_number_of_vowels_used(self):
        expected = 5
        actual = vowels('abcdefghijklmnopqrstuvwxyz')

        self.assertEqual(expected, actual)

    def test_returns_the_number_of_vowels_used(self):
        expected = 0
        actual = vowels('bcdfghjkl')

        self.assertEqual(expected, actual)


if __name__ == '__main__':
	unittest.main()