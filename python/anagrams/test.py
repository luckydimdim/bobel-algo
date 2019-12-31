import unittest
from index import anagrams


class TestAnagrams(unittest.TestCase):

    def test_anagrams_exists(self):
        self.assertTrue(callable(anagrams))

    def test_hello_is_an_anagram_of_llohe(self):
    	self.assertTrue(anagrams('hello', 'llohe'))

    def test_whoa_hi_is_an_anagram_of_hi_whoa(self):
    	self.assertTrue(anagrams('Whoa! Hi!', 'Hi! Whoa!'))

    def test_one_one_is_not_an_anagram_of_two_two_two(self):
    	self.assertFalse(anagrams('One One', 'Two two two'))

    def test_one_one_is_not_an_anagram_of_one_one_c(self):
    	self.assertFalse(anagrams('One one', 'One one c'))

    def test_a_tree_a_life_a_bench_is_not_an_anagram_of_a_tree_a_fence_a_yard(self):
    	self.assertFalse(anagrams('A tree, a life, a bench', 'A tree, a fence, a yard'))

if __name__ == '__main__':
    unittest.main()
