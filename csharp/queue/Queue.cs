using System;
using System.Collections.Generic;

namespace Queue
{
    /// <summary>
    /// Create a queue data structure.  The queue
    /// should be a class with methods 'add' and 'remove'.
    /// Adding to the queue should store an element until
    /// it is removed
    /// </summary>
    /// <examples>
    ///     const q = new Queue();
    ///     q.add(1);
    ///     q.remove(); // returns 1;
    /// </examples>
    public class Queue
    {
        private List<int> data = null;

        public Queue()
        {
            this.data = new List<int>();
        }

        public void Add(int element)
        {
            this.data.Insert(0, element);
        }

        public int Remove()
        {
            int result = this.data[this.data.Count - 1];
            data.RemoveAt(this.data.Count - 1);

            return result;
        }
    }
}
