using System.Collections.Generic;

namespace Tree
{
    /// <summary>
    /// 1) Create a node class.  The constructor
    /// should accept an argument that gets assigned
    /// to the data property and initialize an
    /// empty array for storing children. The node
    /// class should have methods 'add' and 'remove'.
    /// 2) Create a tree class. The tree constructor
    /// should initialize a 'root' property to null.
    /// 3) Implement 'traverseBF' and 'traverseDF'
    /// on the tree class.  Each method should accept a
    /// function that gets called with each element in the tree
    /// </summary>
    public class Node
    {
        public string Data = "";
        public List<Node> Children = null;

        public Node(string data)
        {
            this.Data = data;
            this.Children = new List<Node>();
        }

        public void Add(string data)
        {
            var node = new Node(data);
            this.Children.Add(node);
        }

        public void Remove(string data)
        {
            for (int i = 0; i < this.Children.Count; ++i)
            {
                if (this.Children[i].Data == data)
                {
                    this.Children.RemoveAt(i);
                }
            }
        }
    }
}