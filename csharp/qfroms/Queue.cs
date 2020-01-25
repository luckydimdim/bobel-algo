using System;
using System.Collections;

namespace Qfroms
{
    /// <summary>
    /// --- Directions
    /// Implement a Queue datastructure using two stacks.
    /// *Do not* create an array inside of the 'Queue' class.
    /// Queue should implement the methods 'add', 'remove', and 'peek'.
    /// For a reminder on what each method does, look back
    /// at the Queue exercise.
    /// </summary>
    /// <example>
    /// var q = new Queue();
    /// q.Add(1);
    /// q.Add(2);
    /// q.Peek();   // returns 1
    /// q.Remove(); // returns 1
    /// q.Remove(); // returns 2
    /// <example>
    public class Queue
    {
        private Stack left;
        private Stack right;

        public Queue()
        {
            this.left = new Stack();
            this.right = new Stack();
        }

        public void Add(object element)
        {
            while (this.right.Peek() != null)
            {
                this.left.Push(this.right.Pop());
            }

            this.left.Push(element);
        }

        public object Remove()
        {
            while (this.left.Peek() != null)
            {
                this.right.Push(this.left.Pop());
            }

            return this.right.Pop();
        }

        public object Peek()
        {
            while (this.left.Peek() != null)
            {
                this.right.Push(this.left.Pop());
            }

            return this.right.Peek();
        }
    }
}