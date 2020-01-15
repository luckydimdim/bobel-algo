# --- Description
# Create a queue data structure.  The queue
# should be a class with methods 'add' and 'remove'.
# Adding to the queue should store an element until
# it is removed
# --- Examples
#     const q = new Queue();
#     q.add(1);
#     q.remove(); // returns 1;

class Queue:
    data = []

    def __init__(self):
        self.data = []

    def add(self, element):
        self.data.insert(0, element)

        return True

    def remove(self):
        result = self.data.pop()

        return result

# q = Queue()
# q.add(3)
# print(q.remove())
