import unittest
import inspect
from queue import Queue
from index import weave


class TestWeave(unittest.TestCase):

    def test_queues_have_a_peek_function(self):
        methods = inspect.getmembers(Queue, inspect.isfunction)
        self.assertTrue('peek' in dict(methods))

    def test_peek_returns_but_does_not_remove_the_first_value(self):
        q = Queue()
        q.add(1)
        q.add(2)

        self.assertEqual(1, q.peek())
        self.assertEqual(1, q.peek())
        self.assertEqual(1, q.remove())
        self.assertEqual(2, q.remove())

    def test_weave_is_a_function(self):
        self.assertTrue(callable(weave))

    def test_weave_can_combine_two_queues(self):
        one = Queue()
        one.add(1)
        one.add(2)
        one.add(3)
        one.add(4)

        two = Queue()
        two.add('one')
        two.add('two')
        two.add('three')
        two.add('four')

        result = weave(one, two)

        self.assertEqual(1, result.remove())
        self.assertEqual('one', result.remove())
        self.assertEqual(2, result.remove())
        self.assertEqual('two', result.remove())
        self.assertEqual(3, result.remove())
        self.assertEqual('three', result.remove())
        self.assertEqual(4, result.remove())
        self.assertEqual('four', result.remove())

if __name__ == '__main__':
    unittest.main()