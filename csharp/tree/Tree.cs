using System.Collections.Generic;

namespace Tree
{
    public delegate void ProcessNode(Node node);

    public class Tree
    {
        public Node Root = null;

        public void TraverseBF(ProcessNode function)
        {
            var list = new List<Node>();
            list.Add(this.Root);

            while (list.Count > 0)
            {
                Node node = list[0];
                list.RemoveAt(0);

                list.AddRange(node.Children);

                function(node);
            }
        }

        public void TraverseDF(ProcessNode function)
        {
            var list = new List<Node>();
            list.Add(this.Root);

            while (list.Count > 0)
            {
                Node node = list[0];
                list.RemoveAt(0);

                list.InsertRange(0, node.Children);

                function(node);
            }
        }
    }
}