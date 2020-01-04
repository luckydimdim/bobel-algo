import unittest
from index import pyramid


class TestPyramid(unittest.TestCase):

    def test_pyramid_is_a_function(self):
        self.assertTrue(callable(pyramid))

    def test_prints_a_pryamid_for_n2(self):
        expected = " # \n###"
        actual = pyramid(2)
        self.assertEqual(expected, actual)

    def test_prints_a_pryamid_for_n3(self):
        expected = "  #  \n ### \n#####"
        actual = pyramid(3)
        self.assertEqual(expected, actual)

    def test_prints_a_pryamid_for_n4(self):
        expected = "   #   \n  ###  \n ##### \n#######"
        actual = pyramid(4)
        self.assertEqual(expected, actual)        


if __name__ == "__main__":
    unittest.main()
