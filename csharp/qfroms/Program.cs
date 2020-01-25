using System;

namespace Qfroms
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var q = new Queue();
            q.Add(1);
            q.Add(2);

            Console.WriteLine(q.Remove());
            Console.WriteLine(q.Remove());
        }
    }
}
