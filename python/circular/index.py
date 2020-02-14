from Node import Node
from LinkedList import LinkedList

# --- Directions
# Given a linked list, return true if the list
# is circular, false if it is not.
# --- Examples
#   l = LinkedList()
#   a = Node('a')
#   b = Node('b')
#   c = Node('c')
#   l.head = a
#   a.next = b
#   b.next = c
#   c.next = b
#   circular(l) // True

def circular(list):
    if list.head is None:
        return False

    slow = list.getFirst()
    fast = list.getFirst()

    while (fast.next and fast.next.next):
        slow = slow.next
        fast = fast.next.next

        if slow == fast:
            return True

    return False