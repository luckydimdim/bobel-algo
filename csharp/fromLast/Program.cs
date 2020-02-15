using System;
using LinkedList;

namespace FromLast
{
    public class Program
    {
        public static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
        }

        /// <summary>
        /// Return the 'middle' node of a linked list.
        /// If the list has an even number of elements, return
        /// the node at the end of the first half of the list.
        /// *Do not* use a counter variable, *do not* retrieve
        /// the size of the list, and only iterate
        /// through the list one time.
        /// </summary>
        /// <example>
        /// var l = new LinkedList();
        /// l.InsertLast("a");
        /// l.InsertLast("b");
        /// l.InsertLast("c");
        /// l.InsertLast("d");
        /// l.InsertLast("e");
        /// program.FromLast(l, 3); // returns Node { data: "b" }
        /// </example>
        /// <param name="list">LinkedList to process</param>
        /// <param name="n">Spaces from last node</param>
        /// <return type="Node"></return>
        public Node FromLast(LinkedList.LinkedList list, int n)
        {
            Node slow = list.GetFirst();
            Node fast = list.GetAt(n);

            while (fast.Next != null)
            {
                slow = slow.Next;
                fast = fast.Next;
            }

            return slow;
        }
    }
}
