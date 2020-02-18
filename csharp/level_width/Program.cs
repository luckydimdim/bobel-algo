using System;
using System.Collections.Generic;

namespace LevelWidth
{
    public class Program
    {
        public static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
        }

        /// <summary>
        /// --- Directions
        /// Given the root node of a tree, return
        /// an array where each element is the width
        /// of the tree at each level.
        /// --- Example
        /// Given:
        ///     0
        ///   / |  \
        ///  1  2   3
        ///  |      |
        ///  4      5
        /// Answer: [1, 3, 2]
        /// </summary>
        public List<int> LevelWidth(Node root)
        {
            var result = new List<int>();
            int counter = 0;
            var list = new List<Node> { root, null };

            while (list.Count > 0)
            {
                Node node = list[0];
                list.RemoveAt(0);

                if (node == null)
                {
                    if (counter == 0)
                    {
                        return result;
                    }

                    result.Add(counter);
                    list.Add(null);
                    counter = 0;
                }
                else
                {
                    counter++;
                    list.AddRange(node.Children);
                }
            }

            return result;
        }
    }
}
