# Create a stack data structure.  The stack
# should be a class with methods 'push', 'pop', and
# 'peek'.  Adding an element to the stack should
# store it until it is removed.
#
# @example
# s = Stack()
# s.push(1)
# s.push(2)
# s.pop() // returns 2
# s.pop() // returns 1
class Stack:

    data = []

    def __init__(self):
        self.data = []

    def push(self, value):
        self.data.append(value)

    def pop(self):
        result = None

        if len(self.data) > 0:
            result = self.data[len(self.data) - 1]
            del self.data[len(self.data) - 1]

        return result

    def peek(self):
        result = None

        if len(self.data) > 0:
            result = self.data[len(self.data) - 1]

        return result