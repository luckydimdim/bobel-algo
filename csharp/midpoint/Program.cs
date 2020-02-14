using System;
using LinkedList;

namespace Midpoint
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
        /// l.InsertLast('a');
        /// l.InsertLast('b');
        /// l.InsertLast('c');
        /// midpoint(l); // returns Node { data: 'b' }
        /// </example>
        /// <param name="list">LinkedList to process</param>
        /// <return type="Node">Middle node</return>
        public Node Midpoint(LinkedList.LinkedList list)
        {
            if (list.Head == null)
            {
                return null;
            }

            Node slow = list.GetFirst();
            Node fast = list.GetFirst();

            while (fast.Next != null &&  fast.Next.Next != null)
            {
                slow = slow.Next;
                fast = fast.Next.Next;
            }

            return slow;
        }
    }
}
