using System;

namespace LinkedList
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var list = new LinkedList();

            list.InsertLast("a");
            list.InsertLast("b");
            list.InsertLast("c");
            list.InsertLast("d");

            foreach (Node node in list)
            {
                node.Data = node.Data + "0";
            }
        }
    }
}
