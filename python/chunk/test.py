import unittest
from index import chunk


class TestIndex(unittest.TestCase):

    def test_function_exists(self):
        self.assertTrue(callable(chunk))

    def test_chunk_divides_an_array_of_10_elements_with_chunk_size_2(self):
        expected = [[1, 2], [3, 4], [5, 6], [7, 8], [9, 10]]
        actual = chunk([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 2)

        self.assertEqual(expected, actual)

    def test_chunk_divides_an_array_of_3_elements_with_chunk_size_1(self):
        expected = [[1], [2], [3]]
        actual = chunk([1, 2, 3], 1)

        self.assertEqual(expected, actual)

    def test_chunk_divides_an_array_of_5_elements_with_chunk_size_3(self):
        expected = [[1, 2, 3], [4, 5]]
        actual = chunk([1, 2, 3, 4, 5], 3)

        self.assertEqual(expected, actual)

    def test_chunk_divides_an_array_of_13_elements_with_chunk_size_5(self):
        expected = [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13]]
        actual = chunk([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13], 5)

        self.assertEqual(expected, actual)


if __name__ == '__main__':
    unittest.main()
