import unittest
from index import matrix

class TestIndex(unittest.TestCase):

    def test_function_exists(self):
        self.assertTrue(callable(matrix))

    def test_matrix_produces_a_2x2_array(self):
        expected = [
            [1, 2],
            [3, 4]
        ]

        actual = matrix(2)

        self.assertEqual(expected, actual)

    def test_matrix_produces_a_3x3_array(self):
        expected = [
            [1, 2, 3],
            [8, 9, 4],
            [7, 6, 5],
        ]

        actual = matrix(3)

        self.assertEqual(expected, actual)

    def test_matrix_produces_a_4x4_array(self):
        expected = [
            [1,  2,  3,  4],
            [12, 13, 14, 5],
            [11, 16, 15, 6],
            [10, 9,  8,  7]
        ]

        actual = matrix(4)

        self.assertEqual(expected, actual)

if __name__ == '__main__':
    unittest.main()