using System;

namespace Weave
{
    public class Program
    {
        public static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
        }

        /// <summary>
        /// 1) Complete the task in weave/Queue.cs
        /// 2) Implement the 'weave' function.  Weave
        /// receives two queues as arguments and combines the
        /// contents of each into a new, third queue.
        /// The third queue should contain the *alterating* content
        /// of the two queues.  The function should handle
        /// queues of different lengths without inserting
        /// null into the new one.
        /// *Do not* access the array inside of any queue, only
        /// use the 'Add', 'Remove', and 'Peek' functions.
        /// </summary>
        /// <example>
        ///    var queueOne = new Queue();
        ///    queueOne.Add(1);
        ///    queueOne.Add(2);
        ///    var queueTwo = new Queue();
        ///    queueTwo.Add('Hi');
        ///    queueTwo.Add('There');
        ///    var q = Weave(queueOne, queueTwo);
        ///    q.Remove() // 1
        ///    q.Remove() // 'Hi'
        ///    q.Remove() // 2
        ///    q.Remove() // 'There'
        /// </example>
        /// <param name="sourceOne">First queue to merge</param>
        /// <param name="sourceTwo">Second queue to merge</param>
        /// <return>Merged sourceOne and sourceTwo queues</return>
        public Queue Weave(Queue sourceOne, Queue sourceTwo)
        {
            var result = new Queue();

            while (sourceOne.Peek() != null && sourceTwo.Peek() != null)
            {
                if (sourceOne.Peek() != null)
                {
                    result.Add(sourceOne.Remove());
                }

                if (sourceTwo.Peek() != null)
                {
                    result.Add(sourceTwo.Remove());
                }
            }

            return result;
        }
    }
}
