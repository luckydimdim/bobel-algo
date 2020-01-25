import unittest
from index import Queue

class TestQueue(unittest.TestCase):

    q = None

    def setUp(self):
        self.q = Queue()

    def tearDown(self):
        self.q = None

    def test_queue_is_a_class(self):
        self.assertTrue(locals().get('Queue', True))

    def test_can_add_elements_to_a_queue(self):
        try:
            self.q.add(1)
            self.assertTrue(True)
        except:
            self.assertTrue(False)

    def test_can_remove_elements_from_a_queue(self):
        self.q.add(1)

        try:
            self.q.remove()
            self.assertTrue(True)
        except:
            self.assertTrue(False)

    def test_order_of_elements_is_maintained(self):
        self.q.add(1)
        self.q.add(2)
        self.q.add(3)

        self.assertEqual(1, self.q.remove())
        self.assertEqual(2, self.q.remove())
        self.assertEqual(3, self.q.remove())
        self.assertEqual(None, self.q.remove())

    def test_peek_returns_but_does_not_remove_the_first_value(self):
        self.q.add(1)
        self.q.add(2)

        self.assertEqual(1, self.q.peek())
        self.assertEqual(1, self.q.peek())

        self.assertEqual(1, self.q.remove())
        self.assertEqual(2, self.q.remove())

if __name__ == '__main__':
    unittest.main()