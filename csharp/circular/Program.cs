using System;
using LinkedList;

namespace Circular
{
    public class Program
    {
        public static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
        }

        /// <summary>
        /// Given a linked list, return true if the list
        /// is circular, false if it is not.
        /// </summary>
        /// <example>
        /// var l = new LinkedList();
        /// var a = new Node("a");
        /// var b = new Node("b");
        /// var c = new Node("c");
        /// l.Head = a;
        /// a.Next = b;
        /// b.Next = c;
        /// c.Next = b;
        /// Circular(l) // true
        /// </example>
        /// <param name="list">LinkedList to process</param>
        /// <return type="bool">Circular or not</return>
        public bool Circular(LinkedList.LinkedList list)
        {
            Node slow = list.GetFirst();
            Node fast = list.GetFirst();

            while (fast.Next != null && fast.Next.Next != null)
            {
                slow = slow.Next;
                fast = fast.Next.Next;

                if (slow == fast)
                {
                    return true;
                }
            }

            return false;
        }
    }
}
