from stack import Stack

# --- Directions
# Implement a Queue datastructure using two stacks.
# *Do not* create an array inside of the 'Queue' class.
# Queue should implement the methods 'add', 'remove', and 'peek'.
# For a reminder on what each method does, look back
# at the Queue exercise.
# --- Examples
#     const q = new Queue();
#     q.add(1);
#     q.add(2);
#     q.peek();  // returns 1
#     q.remove(); // returns 1
#     q.remove(); // returns 2

class Queue:

    def __init__(self):
        self.left = Stack()
        self.right = Stack()

    def add(self, value):
        while self.right.peek() != None:
            self.left.push(self.right.pop())

        self.left.push(value)

    def remove(self):
        while self.left.peek() != None:
            self.right.push(self.left.pop())

        return self.right.pop()

    def peek(self):
        while self.left.peek() != None:
            self.right.push(self.left.pop())

        return self.right.peek()