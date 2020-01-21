import unittest
from stack import Stack

class StackTest(unittest.TestCase):
    s = None

    def setUp(self):
        self.s = Stack()

    def tearDown(self):
        self.s = None

    def test_stack_is_a_class(self):
        self.assertTrue(locals().get('Stack', True))

    def test_stack_can_add_and_remove_items(self):
        self.s.push(1)
        self.assertEqual(1, self.s.pop())

        self.s.push(2)
        self.assertEqual(2, self.s.pop())

    def test_stack_can_follows_first_in_last_out(self):
        self.s.push(1)
        self.s.push(2)
        self.s.push(3)

        self.assertEqual(3, self.s.pop())
        self.assertEqual(2, self.s.pop())
        self.assertEqual(1, self.s.pop())

    def test_peek_returns_the_first_element_but_doesnt_pop_it(self):
        self.s.push(1)
        self.s.push(2)
        self.s.push(3)

        self.assertEqual(3, self.s.peek())
        self.assertEqual(3, self.s.pop())
        self.assertEqual(2, self.s.peek())
        self.assertEqual(2, self.s.pop())
        self.assertEqual(1, self.s.peek())
        self.assertEqual(1, self.s.pop())

if __name__ == '__main__':
    unittest.main()