using System.Collections;

namespace LinkedList
{
    public delegate void ProcessNode(Node node);

    public class LinkedList : IEnumerable, IEnumerator
    {
        public Node Head { get; set; }

        public int Position = -1;

        /// <summary>
        /// Creates a new Node from argument 'data'
        /// and assigns the resulting node to the 'head' property.
        /// Make sure to handle the case in which the linked list
        /// already has a node assigned to the 'head' property.
        /// </summary>
        public void InsertFirst(string data)
        {
            if (this.Head == null) {
                this.Head = new Node(data);

                return;
            }

            this.Head = new Node(data, this.Head);
        }

        /// <summary>
        /// Returns the number of nodes in the linked list.
        /// </summary>
        public int Size()
        {
            int counter = 0;
            Node current = this.Head;

            if (current == null)
            {
                return counter;
            }

            while (current != null)
            {
                counter++;
                current = current.Next;
            }

            return counter;
        }

        /// <summary>
        /// Returns the first node of the linked list.
        /// </summary>
        public Node GetFirst()
        {
            Node result = this.Head;

            return result;
        }

        /// <summary>
        /// Returns the last node of the linked list.
        /// </summary>
        public Node GetLast()
        {
            Node current = this.Head;

            if (current == null)
            {
                return current;
            }

            while (current.Next != null)
            {
                current = current.Next;
            }

            return current;
        }

        /// <summary>
        /// Empties the linked list of any nodes.
        /// </summary>
        public void Clear()
        {
            this.Head = null;
        }

        /// <summary>
        /// Removes only the first node of the linked list.
        /// The list's head should now be the second element.
        /// </summary>
        public void RemoveFirst()
        {
            if (this.Head == null)
            {
                return;
            }

            this.Head = this.Head.Next;
        }

        /// <summary>
        /// Removes the last node of the chain.
        /// </summary>
        public void RemoveLast()
        {
            if (this.Head == null)
            {
                return;
            }

            Node current = this.Head;
            Node next = current.Next;

            while (next.Next != null)
            {
                current = next;
                next = next.Next;
            }

            current.Next = null;
        }

        /// <summary>
        /// Inserts a new node with provided data at the end of the chain
        /// </summary>
        public void InsertLast(string data)
        {
            var newNode = new Node(data);
            Node lastNode = this.Head;

            if (lastNode == null)
            {
                this.Head = newNode;

                return;
            }

            while (lastNode.Next != null)
            {
                lastNode = lastNode.Next;
            }

            lastNode.Next = newNode;
        }

        /// <summary>
        /// Returns the node at the provided index
        /// </summary>
        public Node GetAt(int index)
        {
            if (this.Head == null)
            {
                return null;
            }

            Node current = this.Head;
            int counter = 0;

            while (current != null)
            {
                if (index == counter) {
                    return current;
                }

                current = current.Next;
                counter++;
            }

            return null;
        }

        /// <summary>
        /// Removes node at the provided index
        /// </summary>
        public void RemoveAt(int index)
        {
            if (this.Head == null)
            {
                return;
            }

            Node previous = this.GetAt(index - 1);
            Node next = this.GetAt(index + 1);

            if (previous != null)
            {
                previous.Next = next;
            }
        }

        /// <summary>
        /// Removes node at the provided index
        /// </summary>
        public void InsertAt(string data, int index)
        {
            if (this.Head == null)
            {
                return;
            }

            if (index == 0)
            {
                Node temp = this.Head;
                this.Head = new Node(data, temp);

                return;
            }

            Node previous = this.GetAt(index - 1);
            Node current = this.GetAt(index);

            previous.Next = new Node(data, current);
        }

        /// <summary>
        /// Calls the provided function with every node of the chain
        /// </summary>
        public void ForEach(ProcessNode function)
        {
            if (this.Head == null)
            {
                return;
            }

            Node current = this.Head;

            while (current != null)
            {
                function(current);
                current = current.Next;
            }
        }

        public IEnumerator GetEnumerator()
        {
            return (IEnumerator) this;
        }

        public bool MoveNext()
        {
            this.Position++;

            return (this.Position < this.Size());
        }

        public void Reset()
        {
            this.Position = -1;
        }

        public object Current
        {
            get
            {
                return this.GetAt(this.Position);
            }
        }
    }
}