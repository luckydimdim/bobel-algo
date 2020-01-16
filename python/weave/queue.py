# --- Directions
# Implement a 'peek' method in this Queue class.
# Peek should return the last element (the next
# one to be returned) from the queue *without*
# removing it.


class Queue:

    data = [];

    def __init__(self):
        self.data = []

    def add(self, element):
        self.data.insert(0, element)

    def remove(self):
        return self.data.pop()

    def peek(self):
        if len(self.data) > 0:
            return self.data[len(self.data) - 1]
        else:
            return None