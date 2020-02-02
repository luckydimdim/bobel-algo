import unittest
from index import sum

class SumTest(unittest.TestCase):

    def test_sum_function_exists(self):
        self.assertTrue(callable(sum))

    def test_sum_properly_puts_values_to_memory(self):
        self.assertEqual('20', sum('11', '9'))

    def test_sum_works_properly_with_big_numbers(self):
        self.assertEqual('111111111111111111111111111111333', sum('111111111111111111111111111111111', '222'))

if __name__ == '__main__':
    unittest.main()