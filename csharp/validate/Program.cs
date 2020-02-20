using System;

namespace Validate
{
    public class Program
    {
        public static void Main(string[] args)
        { }

        /// <summary>
        /// --- Directions
        /// Given a node, validate the binary search tree,
        /// ensuring that every node's left hand child is
        /// less than the parent node's value, and that
        /// every node's right hand child is greater than
        /// the parent
        /// </summary>
        public bool Validate(Node node, int? min = null, int? max = null)
        {
            if (min != null && node.Data < min)
            {
                return false;
            }

            if (max != null && node.Data > max)
            {
                return false;
            }

            if (node.Left != null)
            {
                if (this.Validate(node.Left, min, node.Data) == false)
                {
                    return false;
                }
            }

            if (node.Right != null)
            {
                if (!this.Validate(node.Right, node.Data, max) == false)
                {
                    return false;
                }
            }

            return true;
        }
    }
}
