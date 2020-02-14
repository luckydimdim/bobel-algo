from LinkedList import LinkedList

# --- Directions
# Return the 'middle' node of a linked list.
# If the list has an even number of elements, return
# the node at the end of the first half of the list.
# *Do not* use a counter variable, *do not* retrieve
# the size of the list, and only iterate
# through the list one time.
# --- Example
#   const l = new LinkedList();
#   l.insertLast('a')
#   l.insertLast('b')
#   l.insertLast('c')
#   midpoint(l); // returns { data: 'b' }

def midpoint(list):
    if list.head is None:
        return 0

    slow = list.getFirst()
    fast = list.getFirst()

    while (fast.next is not None and fast.next.next is not None):
        slow = slow.next
        fast = fast.next.next

    return slow