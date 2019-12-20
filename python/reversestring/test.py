import unittest
from index import reverse

class TestMethods(unittest.TestCase):

    def test_revert_function_exists(self):
        self.assertTrue(callable(reverse))

    def test_function_reverses_a_string(self):
        self.assertEqual(reverse('abcd'), 'dcba')

    def test_function_reverses_a_string_with_whitespaces(self):
        self.assertEqual(reverse('  abcd'), 'dcba  ')

if __name__ == '__main__':
    unittest.main()